<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;
use App\Lead;
use App\Contact;
use App\Account;
use Datatables;
use Illuminate\Support\Facades\DB;
class TasksController extends Controller
{

	public function index()
	{	

		
		$tasks =DB::table('tasks')
		->join('users','tasks.assignedto','=','users.id')
		->select('tasks.*','users.id as uid','users.position')
		->get();
		 return view('tasks.index',compact('tasks'));
				
	}

	public function create()
	{
		$users=user::all(); 
		return view('tasks.create',compact('users'));
	}


		public function save(Request $request)
		{
			$this->validate($request,[
			'subject'=>'required|unique:tasks,subject|max:20',
			'status'=>'required',
			'startdate'=>'required|date|date_format:Y-m-d|after:yesterday',
			'duedate'=>'required|date|date_format:Y-m-d|after:startdate',
			'relatedto'=>'required',
			'contactname'=>'required',
			'priority'=>'required',
			'leads'=>'required',
			'description'=>'required',
			'assignedto'=>'required',
			]);
		
			$task=Task::create([
			'subject'=>$request->subject,
			'status'=>$request->status,
			'startdate'=>$request->startdate,
			'duedate'=>$request->duedate,
			'relatedto'=>$request->relatedto,
			'contactname'=>$request->contactname,
			'priority'=>$request->priority,
			'leads'=>$request->leads,
			'description'=>$request->description,
			'assignedto'=>$request->assignedto,
			
		]);
			session()->flash('save','Task successfully save');
				return redirect('/tasks');
			// return view('accounts.show',compact('account'));	
		}
		
		public function show($id)
		{
			// $account = Account::find($id);
			$task =DB::table('tasks')
		->join('users','tasks.assignedto','=','users.id')
		->select('tasks.*','users.id as uid','users.position')
		->where('tasks.id','=',$id)
		->get();
			return response()->json($task);
			
		}		

		public function edit($id)
		{	
		 $tasks =DB::table('tasks')
		->join('users','tasks.assignedto','=','users.id')
		->select('tasks.*','users.id as uid')
		->where('tasks.id','=',$id)
		->get();
		
			 $tasks1=User::all(); 
			return view('tasks.edit',compact('tasks'),compact('tasks1'));

		}


		public function update(Request $request)
		{
			$task = Task::find($request->aid);
			$task->subject=$request->subject;
			$task->status=$request->status;
			$task->startdate=$request->startdate;
			$task->duedate=$request->duedate;
			$task->relatedto=$request->relatedto;
			$task->contactname=$request->contactname;
			$task->priority=$request->priority;
			$task->leads=$request->leads;
			$task->description=$request->description;
			$task->assignedto=$request->assignedto;
			
			$task->save();
			session()->flash('update','Task successfully updated');
			return redirect('/tasks');

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
				$lead = Task::destroy($request['id']);
				session()->flash('delete','Task successfully deleted');
				return response()->json(['msg'=>'recode deafads susdfa']);
			}
		}

		public function gettable($id)
		{	

			
			 $task =DB::table($id)
			 ->select('*')
			 ->get();

			 return response()->json($task);
		}	
}


