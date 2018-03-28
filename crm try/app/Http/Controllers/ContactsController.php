<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\User;
use Illuminate\Support\Facades\DB;

class ContactsController extends Controller
{
    public function index()
	{	

		
		$contacts =DB::table('contacts')
		->join('users','contacts.assignedto','=','users.id')
		->select('contacts.*','users.id as uid','users.position')
		->get();
		 return view('contacts.index',compact('contacts'));
				
	}

	public function create()
	{
			$users=user::all(); 
		return view('contacts.create',compact('users'));
	}


		public function save(Request $request)
		{
			$this->validate($request,[
			'pre'=>'required',
			'fname'=>'required',
			'lname'=>'required',
			'officephone'=>'required|numeric',
			'mobile'=>'required|numeric',
			'title'=>'required|max:20',
			'department'=>'required',
			'aname'=>'required|unique:contacts,aname',
			'email'=>'required|email',
			'address'=>'required',
			'city'=>'required',
			'state'=>'required',
			'postalcode'=>'required|numeric',
			'country'=>'required',
			'description'=>'required',
			 'leadsource'=>'required',
			 'assignedto'=>'required',
			
			]);
			
			$contact=Contact::create([
			'pre'=>$request->pre,
			'fname'=>$request->fname,
			'lname'=>$request->lname,
			'officephone'=>$request->officephone,
			'mobile'=>$request->mobile,
			'title'=>$request->title,
			'department'=>$request->department,
			'aname'=>$request->aname,
			'email'=>$request->email,
			'address'=>$request->address,
			'city'=>$request->city,
			'state'=>$request->state,
			'postalcode'=>$request->postalcode,
			'country'=>$request->country,
			 'description'=>$request->description,
			 'leadsource'=>$request->leadsource,
			 'assignedto'=>$request->assignedto,
			

		]);
			session()->flash('save','Contact successfully save');
				return redirect('/contacts');
			// return view('accounts.show',compact('account'));	
		}
		
		public function show($id)
		{
			// $account = Account::find($id);
			$contact =DB::table('contacts')
		->join('users','contacts.assignedto','=','users.id')
		->select('contacts.*','users.id as uid','users.position')
		->where('contacts.id','=',$id)
		->get();
			return response()->json($contact);
			
		}		

		public function edit($id)
		{	
		 $contacts =DB::table('contacts')
		->join('users','contacts.assignedto','=','users.id')
		->select('contacts.*','users.id as uid')
		->where('contacts.id','=',$id)
		->get();
		
			 $contact1=User::all(); 
			return view('contacts.edit',compact('contacts'),compact('contact1'));

		}


		public function update(Request $request)
		{
			$contact = Contact::find($request->id);
			$contact->pre=$request->pre;
			$contact->fname=$request->fname;
			$contact->lname=$request->lname;
			$contact->officephone=$request->officephone;
			$contact->mobile=$request->mobile;
			$contact->title=$request->title;
			$contact->department=$request->department;
			$contact->aname=$request->aname;
			$contact->email=$request->email;
			$contact->address=$request->address;
			$contact->city=$request->city;
			$contact->state=$request->state;
			$contact->postalcode=$request->postalcode;
			$contact->country=$request->country;
			$contact->description=$request->description;
			$contact->leadsource=$request->leadsource;
			$contact->assignedto=$request->assignedto;
			
			$contact->save();
			session()->flash('update','Contact successfully updated');
			return redirect('/contacts');

		}


		// public function delete($id)
		// {
		// 	$contact = Contact::find($id);
		// 	$deleted=$contact->delete();
		// 	return redirect('/contacts');
		// }

		public function deleterecod(Request $request)
		{
			
			if($request->ajax())
			{
				$lead = Contact::destroy($request['id']);
				return response()->json(['msg'=>'recode deafads susdfa']);
			}
		}
}
