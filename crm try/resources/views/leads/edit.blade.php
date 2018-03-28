@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">



     <div class="col-md-2">
        <div class="main-sidebar">
        
            <ul>
               <li><a href="{{url('leads/create')}}">Create Lead</a></li>
               <li><a href="{{url('leads')}}">View Leads</a></li>
            </ul>
            </div>
        
    </div>  



        <div class="col-md-8 main-block">
            <div class="card">
                <div class="card-header">{{ __('Edit Leads') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{url('/leads/update')}}">
                        @csrf
                        
                         <input type="hidden" name="id" value="{{$leads[0]->id}}">
                        
                         <div class="form-group row">
                            <label for="pre" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                 <div class="col-md-2">
                                <select class="form-control{{ $errors->has('pre') ? ' is-invalid' : '' }}" name="pre"  required autofocus>
                                   @if(!empty($leads[0]->pre))
                                 <option selected value="{{$leads[0]->pre}}">{{$leads[0]->pre}}</option>
                                    <option value="Mr">Mr.</option>
                                    <option value="Ms">Ms.</option>
                                    <option value="Mrs">Mrs.</option>
                                    <option value="Dr">Dr.</option>
                                    <option value="Er">Er.</option>
                                    <option value="Prof">Prof.</option>
                                    
                             @endif
                            </select>

                                @if ($errors->has('pre'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('pre') }}</strong>
                                    </span>
                                @endif
                            </div>


                               <div class="col-md-4">
                                <input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{$leads[0]->fname}} {{ old('fname') }}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>


                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{$leads[0]->lname}} {{ old('lname') }}" required autofocus>

                                @if ($errors->has('lname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="officephone" class="col-md-4 col-form-label text-md-right">{{ __('Office Phone') }}</label>

                            <div class="col-md-6">
                                <input id="officephone" type="text" class="form-control{{ $errors->has('officephone') ? ' is-invalid' : '' }}" name="officephone" value="{{ old('officephone') }} {{$leads[0]->officephone}}" required autofocus>

                                @if ($errors->has('officephone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('officephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                                                    <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{$leads[0]->title}} {{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                            <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{$leads[0]->mobile}} {{ old('mobile') }}" required autofocus>

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                <input id="department" type="text" class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" value="{{ old('department') }}{{$leads[0]->department}} " required autofocus>

                                @if ($errors->has('department'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fax" class="col-md-4 col-form-label text-md-right">{{ __('Fax') }}</label>

                            <div class="col-md-6">
                                <input id="fax" type="text" class="form-control{{ $errors->has('fax') ? ' is-invalid' : '' }}" name="fax" value="{{ old('fax') }}{{$leads[0]->fax}} " required autofocus>

                                @if ($errors->has('fax'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('fax') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                            <div class="form-group row">
                            <label for="aname" class="col-md-4 col-form-label text-md-right">{{ __('Account Name') }}</label>

                            <div class="col-md-6">
                                <input id="aname" type="text" class="form-control{{ $errors->has('aname') ? ' is-invalid' : '' }}" name="aname" value="{{ old('aname') }}{{$leads[0]->aname}} " required autofocus>

                                @if ($errors->has('aname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('aname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group row">
                            <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('Website') }}</label>

                            <div class="col-md-6">
                                <input id="website" type="text" class="form-control{{ $errors->has('website') ? ' is-invalid' : '' }}" name="website" value="{{ old('website') }}{{$leads[0]->website}}" required autofocus>

                                @if ($errors->has('website'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{$leads[0]->address}} {{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{$leads[0]->city}}{{ old('city') }}" required autofocus>

                                @if ($errors->has('city'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{$leads[0]->state}} {{ old('state') }}" required autofocus>

                                @if ($errors->has('state'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="postalcode" class="col-md-4 col-form-label text-md-right">{{ __('Postalcode') }}</label>

                            <div class="col-md-6">
                                <input id="postalcode" type="text" class="form-control{{ $errors->has('postalcode') ? ' is-invalid' : '' }}" name="postalcode" value="{{$leads[0]->postalcode}}{{ old('postalcode') }}" required autofocus>

                                @if ($errors->has('postalcode'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('postalcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{$leads[0]->country}}{{ old('country') }}" required autofocus>

                                @if ($errors->has('country'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="otheraddress" class="col-md-4 col-form-label text-md-right">{{ __('Other Address') }}</label>

                            <div class="col-md-6">
                               <textarea id="otheraddress" type="text" class="form-control{{ $errors->has('otheraddress') ? ' is-invalid' : '' }}" name="otheraddress" value="{{ old('otheraddress') }}" required autofocus cols="43" rows="10">{{$leads[0]->otheraddress}}</textarea>
                                
                                @if ($errors->has('otheraddress'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('otheraddress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{$leads[0]->email}}{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

                            <div class="col-md-6">
                               <textarea id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required autofocus cols="43" rows="10">{{$leads[0]->description}}</textarea>
                                
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                
                                <select class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status"  required autofocus>
                                   @if(!empty($leads[0]->status))
                   <option selected value="{{$leads[0]->status}}">{{$leads[0]->status}}</option>
                                    <option value="New">New</option>
                                    <option value="Assigned">Assigned</option>
                                    <option value="In Process">In Process</option>
                                    <option value="Converted">Converted</option>
                                    <option value="Recycled">Recycled</option>
                                    <option value="Dead">Dead</option>
                            @endif
                            </select>

                                @if ($errors->has('status'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="statusdescription" class="col-md-4 col-form-label text-md-right">{{ __('Status Description') }}</label>

                            <div class="col-md-6">
                               <textarea id="statusdescription" type="text" class="form-control{{ $errors->has('statusdescription') ? ' is-invalid' : '' }}" name="statusdescription" value="{{ old('statusdescription') }}{{$leads[0]->statusdescription}}" required autofocus cols="43" rows="10">{{$leads[0]->statusdescription}}</textarea>
                                
                                @if ($errors->has('statusdescription'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('statusdescription') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  

                               <div class="form-group row">
                            <label for="opportunityamount" class="col-md-4 col-form-label text-md-right">{{ __('Opportunity Amount') }}</label>

                            <div class="col-md-6">
                                <input id="opportunityamount" type="text" class="form-control{{ $errors->has('opportunityamount') ? ' is-invalid' : '' }}" name="opportunityamount" value="{{ old('opportunityamount') }}{{$leads[0]->opportunityamount}}" required autofocus>

                                @if ($errors->has('opportunityamount'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('opportunityamount') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="leadsource" class="col-md-4 col-form-label text-md-right">{{ __('Lead Source') }}</label>

                            <div class="col-md-6">
                                
                                <select class="form-control{{ $errors->has('leadsource') ? ' is-invalid' : '' }}" name="leadsource"  required autofocus>
                                   @if(!empty($leads[0]->leadsource))
                   <option selected value="{{$leads[0]->leadsource}}">{{$leads[0]->leadsource}}</option>
                                    <option value="Cold Call">Cold Call</option>
                                    <option value="Existing Customer">Existing Customer</option>
                                    <option value="Self Generated">Self Generated</option>
                                    <option value="Employee">Employee</option>
                                    <option value="Partner">Partner</option>
                                    <option value="Public Relations">Public Relations</option>
                                    <option value="Direct Mail">Direct Mail</option>
                                    <option value="Conference">Conference</option>
                                    <option value="Trade Show">Trade Show</option>
                                    <option value="Web Site">Web Site</option>
                                    <option value="Email">Email</option>
                                    <option value="Campaign">Campaign</option>
                                    <option value="Other">Other</option>
                            @endif
                            </select>

                                @if ($errors->has('leadsource'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('leadsource') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                                <div class="form-group row">
                            <label for="leadsourcedescription" class="col-md-4 col-form-label text-md-right">{{ __('Lead Source Description') }}</label>

                            <div class="col-md-6">
                               <textarea id="leadsourcedescription" type="text" class="form-control{{ $errors->has('leadsourcedescription') ? ' is-invalid' : '' }}" name="leadsourcedescription" value="{{ old('leadsourcedescription') }}{{$leads[0]->leadsourcedescription}}" required autofocus cols="43" rows="10">{{$leads[0]->leadsourcedescription}}</textarea>
                                
                                @if ($errors->has('leadsourcedescription'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('leadsourcedescription') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                                <div class="form-group row">
                            <label for="referredby" class="col-md-4 col-form-label text-md-right">{{ __('Referred By') }}</label>

                            <div class="col-md-6">
                                <input id="referredby" type="text" class="form-control{{ $errors->has('referredby') ? ' is-invalid' : '' }}" name="referredby" value="{{ old('referredby') }}{{$leads[0]->referredby}}" required autofocus>

                                @if ($errors->has('referredby'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('referredby') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group row">
                            <label for="assignedto" class="col-md-4 col-form-label text-md-right">{{ __('Assigned To') }}</label>

                            <div class="col-md-6">
                               

                               <select class="form-control{{ $errors->has('assignedto') ? ' is-invalid' : '' }}" name="assignedto"  required autofocus>
                                    @foreach($leads1 as $account)
                                      @if($leads[0]->assignedto==$account->id)
                                    <option selected value="{{$account->id}}">{{$account->position}}</option>
                                    @else
                                    <option value="{{$account->id}}">{{$account->position}}</option>

                                    @endif
                                    
                                    @endforeach
                                                
                            </select>


                                @if ($errors->has('assignedto'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('assignedto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>


            <div class="container">
  
    <div class="form2">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Task</button>

      <div id="demo" class="collapse">
        
          @if(count(@$task1))

            <table id="myTable" class="display" border="1">
                 <thead>
                <tr>
                    <td>Subject</td>
                   <td>Contact</td>
                   <td>Related to</td>
                    <td>Due Date</td>
                    <td>Assigned to</td>
                    <td>Edit</td>
                    
                    
                </tr>
                 </thead>

                @foreach($task1 as $account)
 <tbody>
<tr class="id{{$account->id}}">

<td><button class="btn-detail open_modal" value="{{$account->id}}">{{$account->subject}}</button></td>

<td>{{$account->contactname}}</td>
<td>{{$account->relatedto}}</td>
<td>{{$account->duedate}}</td>
<td>{{$account->position}}</td>
    <td><a class="btn btn-info btn-info" href="{{url('/tasks/edit/'.$account->id)}}">Edit</a></td>
    
</tr>
</tbody>
@endforeach

                </table>
            
          
          @else
        
        <?php echo "Now No any task for this leads"?>  
        
          @endif
           
            </div>


<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">Add New Task</button>
<div id="demo2" class="collapse">

      <form method="POST" action="{{url('/tasks')}}">
        @csrf
                    <div class="form-group row">
                            <label for="subject" class="col-md-4 col-form-label text-md-right">{{ __('Subject') }}</label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" value="{{ old('subject') }}" required autofocus>

                                @if ($errors->has('subject'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                                 <div class="col-md-6">
                                <select class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status"  required autofocus>
                                    <option value="Not Started">Not Started</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Pending Input">Pending Input</option>
                                    <option value="Deferred">Deferred</option>
                                    
                                 </select>

                                @if ($errors->has('status'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  


                            <div class="form-group row">
                            <label for="startdate" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>

                            <div class="col-md-6">
                                <input id="startdate" type="Date" class="form-control{{ $errors->has('startdate') ? ' is-invalid' : '' }}" name="startdate" value="{{ old('startdate') }}" required autofocus>

                                @if ($errors->has('startdate'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('startdate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                                <div class="form-group row">
                            <label for="duedate" class="col-md-4 col-form-label text-md-right">{{ __('Due Date') }}</label>

                            <div class="col-md-6">
                                <input id="startdate" type="Date" class="form-control{{ $errors->has('duedate') ? ' is-invalid' : '' }}" name="duedate" value="{{ old('duedate') }}" required autofocus>

                                @if ($errors->has('duedate'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('duedate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                                <div class="form-group row">
                            <label for="relatedto" class="col-md-4 col-form-label text-md-right">{{ __('Related To') }}</label>

                                 <div class="col-md-6">
                                <select class="form-control{{ $errors->has('relatedto') ? ' is-invalid' : '' }}" name="relatedto"  required autofocus>
                                    <option  value="Leads">Lead</option>
                                    
                            </select>

                                @if ($errors->has('relatedto'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('relatedto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="leads" class="col-md-4 col-form-label text-md-right">{{ __('Related To 2') }}</label>

                                 <div class="col-md-6">
                                <select class="form-control{{ $errors->has('leads') ? ' is-invalid' : '' }}" name="leads" id="leads"  required autofocus>
                                <option value="{{$leads[0]->id}}">{{$leads[0]->aname}}</option>
                            </select>

                                @if ($errors->has('leads'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('leads') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="contactname" class="col-md-4 col-form-label text-md-right">{{ __('Contact Name') }}</label>

                            <div class="col-md-6">
                                <input id="contactname" type="text" class="form-control{{ $errors->has('contactname') ? ' is-invalid' : '' }}" name="contactname" value="{{ old('contactname') }}" required autofocus>

                                @if ($errors->has('contactname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('contactname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                                  <div class="form-group row">
                            <label for="priority" class="col-md-4 col-form-label text-md-right">{{ __('Priority') }}</label>

                            <div class="col-md-6">
                                <input id="priority" type="text" class="form-control{{ $errors->has('priority') ? ' is-invalid' : '' }}" name="priority" value="{{ old('priority') }}" required autofocus>

                                @if ($errors->has('priority'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('priority') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                               <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

                            <div class="col-md-6">
                               <textarea id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required autofocus cols="43" rows="10">{{ old('description') }}</textarea>
                                
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="assignedto" class="col-md-4 col-form-label text-md-right">{{ __('Assigned To') }}</label>

                            <div class="col-md-6">
                               

                               <select class="form-control{{ $errors->has('assignedto') ? ' is-invalid' : '' }}" name="assignedto"  required autofocus>
                                    @foreach($leads1 as $account)
                                      @if(@$leads[0]->tassignedto==$account->id)
                                    <option selected value="{{@$account->id}}">{{$account->position}}</option>
                                    @else
                                    <option value="{{@$account->id}}">{{$account->position}}</option>

                                    @endif
                                    
                                    @endforeach
                                                
                            </select>


                                @if ($errors->has('assignedto'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('assignedto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
     </form>
                   
  </div>




</div>

</div>  
</div>


            </div>



        </div>
    </div>
</div>
@endsection
