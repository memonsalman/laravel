@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 main-block">
            <div class="card">
                <div class="card-header">{{ __('Edit Accounts') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{url('/accounts/update')}}">
                        @csrf
                        
                         <input type="hidden" name="aid" value="{{$accounts[0]->id}}">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="aname" type="text" class="form-control{{ $errors->has('aname') ? ' is-invalid' : '' }}" name="aname" value="{{ old('aname') }}{{$accounts[0]->aname}}" required autofocus>

                                @if ($errors->has('aname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('aname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="officephone" class="col-md-4 col-form-label text-md-right">{{ __('Office Phone') }}</label>

                            <div class="col-md-6">
                                <input id="officephone" type="text" class="form-control{{ $errors->has('officephone') ? ' is-invalid' : '' }}" name="officephone" value="{{ old('officephone') }} {{$accounts[0]->officephone}} " required autofocus>

                                @if ($errors->has('officephone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('officephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('Website') }}</label>

                            <div class="col-md-6">
                                <input id="website" type="text" class="form-control{{ $errors->has('website') ? ' is-invalid' : '' }}" name="website" value="{{ old('website') }} {{$accounts[0]->website}}" required autofocus>

                                @if ($errors->has('website'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                           <div class="form-group row">
                            <label for="fax" class="col-md-4 col-form-label text-md-right">{{ __('Fax') }}</label>

                            <div class="col-md-6">
                                <input id="fax" type="text" class="form-control{{ $errors->has('fax') ? ' is-invalid' : '' }}" name="fax" value="{{ old('fax') }} {{$accounts[0]->fax}}" required autofocus>

                                @if ($errors->has('fax'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('fax') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }} {{$accounts[0]->email}}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Street') }}</label>

                            <div class="col-md-6">
                                <input id="street" type="text" class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" name="street" value="{{ old('street') }} {{$accounts[0]->street}}" required autofocus>

                                @if ($errors->has('street'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('street') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }} {{$accounts[0]->city}}" required autofocus>

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
                                <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }} {{$accounts[0]->state}} " required autofocus>

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
                                <input id="postalcode" type="text" class="form-control{{ $errors->has('postalcode') ? ' is-invalid' : '' }}" name="postalcode" value="{{ old('postalcode') }} {{$accounts[0]->postalcode}} " required autofocus>

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
                                <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }} {{$accounts[0]->country}} " required autofocus>

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
                                <!-- <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }} {{$accounts[0]->description}} " required autofocus> -->

                                <textarea id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }} {{$accounts[0]->description}}" required autofocus cols="43" rows="10">{{$accounts[0]->description}}</textarea>
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="industry" class="col-md-4 col-form-label text-md-right">{{ __('Industry') }}</label>

                            <div class="col-md-6">
                                <input id="industry" type="text" class="form-control{{ $errors->has('industry') ? ' is-invalid' : '' }}" name="industry" value="{{ old('industry') }} {{$accounts[0]->industry}} " required autofocus>

                                @if ($errors->has('industry'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('industry') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 


                        <div class="form-group row">
                            <label for="assignedto" class="col-md-4 col-form-label text-md-right">{{ __('Assigned To') }}</label>

                            <div class="col-md-6">
                               <!--  <input id="assignedto" type="text" class="form-control{{ $errors->has('assignedto') ? ' is-invalid' : '' }}" name="assignedto" value="{{ old('assignedto') }} {{$accounts[0]->assignedto}} " required autofocus> -->

                               <select class="form-control{{ $errors->has('assignedto') ? ' is-invalid' : '' }}" name="assignedto"  required autofocus>
                                    @foreach($accounts1 as $account)
                                      @if($accounts[0]->assignedto==$account->id)
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
