@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 main-block">
            <div class="card">
                <div class="card-header">{{ __('Edit Accounts') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{url('/tasks/update')}}">
                        @csrf
                        
                         <input type="hidden" name="aid" value="{{$tasks[0]->id}}">
                        
                        <div class="form-group row">
                            <label for="subject" class="col-md-4 col-form-label text-md-right">{{ __('Subject') }}</label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" value="{{ old('subject') }}{{$tasks[0]->subject}}" required autofocus>

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
                                   @if(!empty($tasks[0]->status))
                   <option selected value="{{$tasks[0]->status}}">{{$tasks[0]->status}}</option>
                                    <option value="Not Started">Not Started</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Pending Input">Pending Input</option>
                                    <option value="Deferred">Deferred</option>
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
                            <label for="startdate" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>

                            <div class="col-md-6">
                                <input id="startdate" type="date" class="form-control{{ $errors->has('startdate') ? ' is-invalid' : '' }}" name="startdate" value="{{ old('startdate') }}{{$tasks[0]->startdate}}" required autofocus>

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
                                <input id="duedate" type="date" class="form-control{{ $errors->has('duedate') ? ' is-invalid' : '' }}" name="duedate" value="{{ old('duedate') }}{{$tasks[0]->duedate}}" required autofocus>

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
                                   @if(!empty($tasks[0]->relatedto))
                   <option selected value="{{$tasks[0]->relatedto}}">{{$tasks[0]->relatedto}}</option>
                                    <option value="Accounts">Account</option>
                                    <option  value="Contacts">Contact</option>
                                    <option  value="Tasks">Task</option>
                                    <option  value="Opportunities">Opportunity</option>
                                    <option  value="Bugs">Bug</option>
                                    <option  value="Cases">Case</option>
                                    <option  value="Leads">Lead</option>
                                    <option  value="Project">Project</option>
                                    <option  value="ProjectTask">Project Task</option>
                                    <option  value="Prospects">Target</option>
                            @endif
                            </select>

                                @if ($errors->has('relatedto'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('relatedto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  

                         <div class="form-group row">
                            <label for="contactname" class="col-md-4 col-form-label text-md-right">{{ __('Contact Name') }}</label>

                            <div class="col-md-6">
                                <input id="contactname" type="text" class="form-control{{ $errors->has('contactname') ? ' is-invalid' : '' }}" name="contactname" value="{{ old('contactname') }}{{$tasks[0]->contactname}}" required autofocus>

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
                                <input id="priority" type="text" class="form-control{{ $errors->has('priority') ? ' is-invalid' : '' }}" name="priority" value="{{ old('priority') }}{{$tasks[0]->priority}}" required autofocus>

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
                               
                                <textarea id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }} {{$tasks[0]->description}}" required autofocus cols="43" rows="10">{{$tasks[0]->description}}</textarea>
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
                                    @foreach($tasks1 as $account)
                                      @if($tasks[0]->assignedto==$account->id)
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
            </div>
        </div>
    </div>
</div>
@endsection
