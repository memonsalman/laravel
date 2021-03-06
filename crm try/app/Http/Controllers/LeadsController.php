<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
use App\User;
use App\Account;
use Illuminate\Support\Facades\DB;

class LeadsController extends Controller
{
 	
 	public function index()
	{	

		
		$leads =DB::table('leads')
		->join('users','leads.assignedto','=','users.id')
		->select('leads.*','users.id as uid','users.position')
		->get();
		 return view('leads.index',compact('leads'));
				
	}

	public function create()
	{
			$users=user::all(); 
		return view('leads.create',compact('users'));
	}


		public function save(Request $request)
		{
			$this->validate($request,[
			'pre'=>'required',
			'fname'=>'required',
			'lname'=>'required',
			'officephone'=>'required|numeric',
			'title'=>'required',
			'mobile'=>'required|numeric',
			'department'=>'required',
			'fax'=>'required',
			'aname'=>'required|unique:contacts,aname',
			'website'=>'required|url',
			'address'=>'required',
			'city'=>'required',
			'state'=>'required',
			'postalcode'=>'required|numeric',
			'country'=>'required',
			'otheraddress'=>'required',
			'email'=>'required|email',
			'description'=>'required',
			'status'=>'required',
			'statusdescription'=>'required',
			'opportunityamount'=>'required|numeric',
			 'leadsource'=>'required',
			 'leadsourcedescription'=>'required',
			 'referredby'=>'required',
			 'assignedto'=>'required',
			
			]);
			
			$lead=lead::create([
			'pre'=>$request->pre,
			'fname'=>$request->fname,
			'lname'=>$request->lname,
			'officephone'=>$request->officephone,
			'title'=>$request->title,
			'mobile'=>$request->mobile,
			'department'=>$request->department,
			'fax'=>$request->fax,
			'aname'=>$request->aname,
			'website'=>$request->website,
			'address'=>$request->address,
			'city'=>$request->city,
			'state'=>$request->state,
			'postalcode'=>$request->postalcode,
			'country'=>$request->country,
			'otheraddress'=>$request->otheraddress,
			'email'=>$request->email,
			'description'=>$request->description,
			'status'=>$request->status,
			'statusdescription'=>$request->statusdescription,
			'opportunityamount'=>$request->opportunityamount,
			 'leadsource'=>$request->leadsource,
			 'leadsourcedescription'=>$request->leadsourcedescription,
			 'referredby'=>$request->referredby,
			 'assignedto'=>$request->assignedto,
			

		]);
			session()->flash('save','Lead successfully save');
				return redirect('/leads');
			// return view('accounts.show',compact('account'));	
		}
		
		public function show($id)
		{
			// $account = Account::find($id);
			$lead =DB::table('leads')
		->join('users','leads.assignedto','=','users.id')
		->select('leads.*','users.id as uid','users.position')
		->where('leads.id','=',$id)
		->get();
			return response()->json($lead);
			
		}		

		public function edit($id)
		{	
		// DB::enableQueryLog();
		 $leads =DB::table('leads')
		 ->join('users','leads.assignedto','=','users.id')
		 ->select('leads.*','users.id as uid')
		 ->where('leads.id','=',$id)
		 ->get();
		//dd(DB::getQueryLog());
		//dd($leads);

		//DB::enableQueryLog();

		$tasku =DB::table('tasks')
		 ->join('users','tasks.assignedto','=','users.id')
		 ->select('tasks.*','users.id as uid','users.position as position')
  		->where('leads','=',$id)
		 ->get();
		

		//dd($tasku);
	//		dd($leadswithtaskanduser);
		//dd(DB::getQueryLog());
			 $leads1=User::all(); 
			return view('leads.edit')->withTask1($tasku)->withLeads($leads)->withLeads1($leads1);

		}


		public function update(Request $request)
		{
			$lead = lead::find($request->id);
			$lead->pre=$request->pre;
			$lead->fname=$request->fname;
			$lead->lname=$request->lname;
			$lead->officephone=$request->officephone;
			$lead->title=$request->title;
			$lead->mobile=$request->mobile;
			$lead->department=$request->department;
			$lead->fax=$request->fax;
			$lead->aname=$request->aname;
			$lead->website=$request->website;
			$lead->address=$request->address;
			$lead->city=$request->city;
			$lead->state=$request->state;
			$lead->postalcode=$request->postalcode;
			$lead->country=$request->country;
			$lead->otheraddress=$request->otheraddress;
			$lead->email=$request->email;
			$lead->description=$request->description;
			$lead->status=$request->status;
			$lead->statusdescription=$request->statusdescription;
			$lead->opportunityamount=$request->opportunityamount;
			$lead->leadsource=$request->leadsource;
			$lead->leadsourcedescription=$request->leadsourcedescription;
			$lead->referredby=$request->referredby;
			 $lead->assignedto=$request->assignedto;
			
			$lead->save();
			session()->flash('update','Lead successfully updated');
			return redirect('/leads');

		}

		public function convert($id)
			{
				$leads = $id;
				$update=DB::table('leads')
            	->where('id', $leads)
            	->update(['status' => 'Converted']);
			 
			 $lead2 = lead::find($id);
			 $Account=Account::create([
			 'aname'=>$lead2->aname,
			 'officephone'=>$lead2->officephone,
			 'title'=>$lead2->website,
			 'website'=>$lead2->website,
			 'fax'=>$lead2->fax,
			 'email'=>$lead2->email,
			 'street'=>$lead2->address,
			 'city'=>$lead2->city,
			 'state'=>$lead2->state,
			 'postalcode'=>$lead2->postalcode,
			 'country'=>$lead2->country,
			 'description'=>$lead2->description,
			 'assignedto'=>$lead2->assignedto,
			 
			 ]);
			 session()->flash('converted','Lead successfully converted');
			 return redirect('/leads');



			}


		// public function delete($id)
		// {

		// 	 $lead = Lead::find($id);
		// 	 $deleted=$lead->delete();
		// 	 session()->flash('delete','Lead successfully deleted');
		// 	 return redirect('/leads');
		// }

		public function deleterecod(Request $request)
		{
			
			if($request->ajax())
			{
				$lead = Lead::destroy($request['id']);
				return response()->json(['msg'=>'recode deafads susdfa']);
			}
		}	

}
