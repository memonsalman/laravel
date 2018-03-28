@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
       <div class="col-md-2">
        <div class="main-sidebar">
        
            <ul>
               <li><a href="{{url('contacts/create')}}">Create Contacts</a></li>
               <li><a href="{{url('contacts')}}">View Contact</a></li>
            </ul>
            </div>
        
    </div>     




        <div class="col-md-8 main-block">
            <div class="card">
                <div class="card-header">{{ __('Create Contacts') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{url('/contacts')}}">
                    @csrf

                    <div class="form-group row">
                            <label for="pre" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                 <div class="col-md-2">
                                <select class="form-control{{ $errors->has('pre') ? ' is-invalid' : '' }}" name="pre"  required autofocus>
                                    <option value=""></option>            
                                    <option value="Mr">Mr.</option>
                                    <option value="Ms">Ms.</option>
                                    <option value="Mrs">Mrs.</option>
                                    <option value="Dr">Dr.</option>
                                    <option value="Er">Er.</option>
                                    <option value="Prof">Prof.</option>
                                    
                            </select>

                                @if ($errors->has('pre'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('pre') }}</strong>
                                    </span>
                                @endif
                            </div>


                               <div class="col-md-4">
                                <input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}" required autofocus>

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
                                <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" required autofocus>

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
                                <input id="officephone" type="text" class="form-control{{ $errors->has('officephone') ? ' is-invalid' : '' }}" name="officephone" value="{{ old('officephone') }}" required autofocus>

                                @if ($errors->has('officephone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('officephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}" required autofocus>

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                <input id="department" type="text" class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" value="{{ old('department') }}" required autofocus>

                                @if ($errors->has('department'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="aname" class="col-md-4 col-form-label text-md-right">{{ __('Account Name') }}</label>

                            <div class="col-md-6">
                                <input id="aname" type="text" class="form-control{{ $errors->has('aname') ? ' is-invalid' : '' }}" name="aname" value="{{ old('aname') }}" required autofocus>

                                @if ($errors->has('aname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('aname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>

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
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>

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
                                <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" required autofocus>

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
                                <input id="postalcode" type="text" class="form-control{{ $errors->has('postalcode') ? ' is-invalid' : '' }}" name="postalcode" value="{{ old('postalcode') }}" required autofocus>

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
                                <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required autofocus>

                                @if ($errors->has('country'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

                            <div class="col-md-6">
                               <textarea id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required autofocus cols="43" rows="10"></textarea>
                                
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="leadsource" class="col-md-4 col-form-label text-md-right">{{ __('Lead Source') }}</label>

                            <div class="col-md-6">
                                
                                <select class="form-control{{ $errors->has('leadsource') ? ' is-invalid' : '' }}" name="leadsource"  required autofocus>
                                    <option value="">Please Select Lead Source</option>
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
           
                            </select>

                                @if ($errors->has('leadsource'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('leadsource') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 




                        <div class="form-group row">
                            <label for="assignedto" class="col-md-4 col-form-label text-md-right">{{ __('Assigned To') }}</label>

                            <div class="col-md-6">
                                <select class="form-control{{ $errors->has('assignedto') ? ' is-invalid' : '' }}" name="assignedto"  required autofocus>
                                    
                                                @foreach($users as $user)
                                    
                                    <option value="{{$user->id}}">{{$user->position}}</option>

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
