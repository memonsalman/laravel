
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">

    <div class="col-md-2">
        <div class="main-sidebar">
        
            <ul>
               <li><a href="{{url('accounts/create')}}">Create Account</a></li>
               <li><a href="{{url('accounts')}}">View Account</a></li>
            </ul>
            </div>
        
    </div>

        <div class="col-md-9 main-block">


            <div class="container">
@if(session()->has('save'))
<div class="row">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ session()->get('save') }}
        
    </div>
</div>
@endif


@if(session()->has('update'))
<div class="row">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ session()->get('update') }}
        
    </div>
</div>
@endif


@if(session()->has('delete'))
<div class="row">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ session()->get('delete') }}
        
    </div>
</div>
@endif
</div>


            <div class="card">
                <div class="card-header">{{ __('View Accounts') }}</div>
            <table id="myTable" class="display" border="1">
                 <thead>
                <tr>
                    <td>Name</td>
                    <!-- <td>Office phone</td>
                    <td>Website</td>
                    <td>fax</td> -->
                    <td>Address</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <!-- <td>street</td>
                    <td>city</td>
                    <td>state</td>
                    <td>postalcode</td>
                    <td>country</td>
                    <td>description</td>
                    <td>industry</td> -->
                    <td>Assigned to</td>
                    
                    <td>Edit</td>
                    <td>Delete</td>
                    
                </tr>
                 </thead>

                @foreach($accounts as $account)
 <tbody>
<tr class="id{{$account->id}}">

<td><button class="btn-detail open_modal" value="{{$account->id}}">{{$account->aname}}</button></td>
<!-- <td>{{$account->officephone}}</td>
<td>{{$account->website}}</td>
<td>{{$account->fax}}</td> -->
<td>{{$account->street}},{{$account->city}},{{$account->state}},{{$account->postalcode}},{{$account->country}}</td>
<td>{{$account->email}}</td>
<td>{{$account->officephone}}</td>
<!-- <td>{{$account->street}}</td>
<td>{{$account->city}}</td>
<td>{{$account->state}}</td>
<td>{{$account->postalcode}}</td>
<td>{{$account->country}}</td>
<td>{{$account->description}}</td>
<td>{{$account->industry}}</td> -->
<td>{{$account->position}}</td>
    <td><a class="btn btn-info btn-info" href="{{url('/accounts/edit/'.$account->id)}}">Edit</a></td>
    <!-- <td><a href="{{url('/accounts/delete/'.$account->id)}}">Delete</a></td> -->
    <td><button class="btn btn-danger btn-del" value="{{$account->id}}">Remove</button></td>
</tr>
</tbody>
@endforeach

                </table>
        </div>        

</div>        
</div>        

         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <!-- <h4 class="modal-title" id="myModalLabel">Product</h4> -->
            </div>
            <div class="modal-body">
            <form id="frmProducts" name="frmProducts" class="form-horizontal" novalidate="">

                   <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="aname" type="text" class="form-control" value="" readonly required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="officephone" class="col-md-4 col-form-label text-md-right">{{ __('Office Phone') }}</label>

                            <div class="col-md-6">
                             <input id="officephone" type="text" class="form-control" name="officephone" value="" required readonly autofocus>
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('Website') }}</label>

                            <div class="col-md-6">
                                <input id="website" type="text" class="form-control" name="website" value="" required readonly autofocus>

                            </div>
                        </div>

                           <div class="form-group row">
                            <label for="fax" class="col-md-4 col-form-label text-md-right">{{ __('Fax') }}</label>

                            <div class="col-md-6">
                                <input id="fax" type="text" class="form-control" name="fax" value="" required readonly autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="" required readonly autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Street') }}</label>

                            <div class="col-md-6">
                                <input id="street" type="text" class="form-control" name="street" value="" required readonly autofocus>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="" required readonly autofocus>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" value=" " required readonly autofocus>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="postalcode" class="col-md-4 col-form-label text-md-right">{{ __('Postalcode') }}</label>

                            <div class="col-md-6">
                                <input id="postalcode" type="text" class="form-control" name="postalcode" value=" " required readonly autofocus>

                               
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" value="" required readonly autofocus>

                                
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control" name="description" value="" required readonly autofocus></textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="industry" class="col-md-4 col-form-label text-md-right">{{ __('Industry') }}</label>

                            <div class="col-md-6">
                                <input id="industry" type="text" class="form-control" name="industry" value=" " required readonly autofocus>
                            </div>
                        </div> 



                        <div class="form-group row">
                            <label for="assignedto" class="col-md-4 col-form-label text-md-right">{{ __('Assigned To') }}</label>

                            <div class="col-md-6">
                                <input id="assignedto" type="text" class="form-control" name="assignedto" value="" required readonly autofocus>
                            </div>
                        </div>




               
            </form>
            </div>
            <div class="modal-footer">
            <input type="hidden" id="product_id" name="product_id" value="0">
            </div>
        </div>
      </div>
  </div>

</div>





    </div>
 </div>
@endsection
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
<script type="text/javascript">

     var url = "http://localhost/crm/public/accounts/show";

     $(document).on('click','.open_modal',function(){
        var id = $(this).val();
        
        $.get(url + '/' + id, function (data) {
             //success data
            console.log(data[0]);

             $('#id').val(data.id);
             $('#aname').val(data[0].aname);
             $('#officephone').val(data[0].officephone);
             $('#website').val(data[0].website);
             $('#fax').val(data[0].fax);
             $('#email').val(data[0].email);
             $('#street').val(data[0].street);
             $('#city').val(data[0].city);
             $('#state').val(data[0].state);
             $('#postalcode').val(data[0].postalcode);
             $('#country').val(data[0].country);
             $('#description').val(data[0].description);
             $('#industry').val(data[0].industry);
             $('#assignedto').val(data[0].position);
                         // document.getElementById('aname').value=data[0].aname;
            $('#myModal').modal('show');
        }) 
    });

</script>


<script type="text/javascript">
    $(document).on('click','.btn-del',function(e)
    {
        var id=$(this).val();
        if(confirm('are you sure'))
        {
            $.ajax({
                type:"post",
                url:"{{url('/accounts/deleterecod')}}",
                data:{'id':id, _token: '{{csrf_token()}}'},
                success:function(data)
                {
                    $('.id'+id).remove();
                }

            })
        }
        else
        {
            alert('delete cancle ');
        }

    })  
</script>
