<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\User;
use Datatables;
use Illuminate\Support\Facades\DB;
class AccountsController extends Controller
{

	public function index()
	{	

		
		$accounts =DB::table('accounts')
		->join('users','accounts.assignedto','=','users.id')
		->select('accounts.*','users.id as uid','users.position')
		->get();
		 return view('accounts.index',compact('accounts'));
				
	}

	public function create()
	{
		$users=user::all(); 
		return view('accounts.create',compact('users'));
	}


		public function save(Request $request)
		{
			$this->validate($request,[
			'aname'=>'required|unique:accounts,aname|max:20',
			'officephone'=>'required|numeric',
			'website'=>'required|url',
			'fax'=>'required|numeric',
			'email'=>'required|email',
			'street'=>'required',
			'city'=>'required',
			'state'=>'required',
			'postalcode'=>'required|numeric',
			'country'=>'required',
			'description'=>'required',
			'assignedto'=>'required',
			'industry'=>'required',
			]);
		
			$account=Account::create([
			'aname'=>$request->aname,
			'officephone'=>$request->officephone,
			'website'=>$request->website,
			'fax'=>$request->fax,
			'email'=>$request->email,
			'street'=>$request->street,
			'city'=>$request->city,
			'state'=>$request->state,
			'postalcode'=>$request->postalcode,
			'country'=>$request->country,
			'description'=>$request->description,
			'assignedto'=>$request->assignedto,
			'industry'=>$request->industry,

		]);
			session()->flash('save','Accounts successfully save');
				return redirect('/accounts');
			// return view('accounts.show',compact('account'));	
		}
		
		public function show($id)
		{
			// $account = Account::find($id);
			$account =DB::table('accounts')
		->join('users','accounts.assignedto','=','users.id')
		->select('accounts.*','users.id as uid','users.position')
		->where('accounts.id','=',$id)
		->get();
			return response()->json($account);
			
		}		

		public function edit($id)
		{	
		 $accounts =DB::table('accounts')
		->join('users','accounts.assignedto','=','users.id')
		->select('accounts.*','users.id as uid')
		->where('accounts.id','=',$id)
		->get();
		
			 $accounts1=User::all(); 
			return view('accounts.edit',compact('accounts'),compact('accounts1'));

		}


		public function update(Request $request)
		{
			$account = Account::find($request->aid);
			$account->aname=$request->aname;
			$account->officephone=$request->officephone;
			$account->website=$request->website;
			$account->fax=$request->fax;
			$account->email=$request->email;
			$account->street=$request->street;
			$account->city=$request->city;
			$account->state=$request->state;
			$account->postalcode=$request->postalcode;
			$account->country=$request->country;
			$account->description=$request->description;
			$account->assignedto=$request->assignedto;
			$account->industry=$request->industry;
			
			$account->save();
			session()->flash('update','Account successfully updated');
			return redirect('/accounts');

		}


		// public function delete($id)
		// {
		// 	$account = Account::find($id);
		// 	$deleted=$account->delete();
		// 	return redirect('/accounts');
		// }


		public function deleterecod(Request $request)
		{
			
			if($request->ajax())
			{
				$lead = Account::destroy($request['id']);
				session()->flash('delete','Account successfully deleted');
				return response()->json(['msg'=>'recode deafads susdfa']);
			}
		}	
}


