<style type="text/css">

</style>
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-2">
        <div class="main-sidebar">
        
            <ul>
               <li><a href="{{url('contacts/create')}}">Create contacts</a></li>
               <li><a href="{{url('contacts')}}">View Contacts</a></li>
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
                <div class="card-header">{{ __('View Contacts') }}</div>
            <table border="1">
                <tr>
                    <td>Name</td>
                    <td>Title</td>
                    <td>Office phone</td>
                    <!-- <td>mobile</td>
                    <td>department</td> -->
                    <td>Account Name</td>
                    <td>email</td>
                    <!-- <td>address</td>
                    <td>city</td>
                    <td>state</td>
                    <td>postalcode</td>
                    <td>country</td>
                    <td>description</td>
                    <td>leadsource</td> -->
                    <td>assignedto</td>
                    
                    <td>Edit</td>
                    <td>Delete</td>
                    
                </tr>

                @foreach($contacts as $account)

<tr class="id{{$account->id}}">
<td><button class="btn-detail open_modal" value="{{$account->id}}">{{$account->pre}} {{$account->fname}}  {{$account->lname}} </button></td>
<td>{{$account->title}}</td>
<td>{{$account->officephone}}</td>
<!-- <td>{{$account->mobile}}</td>
<td>{{$account->department}}</td> -->
<td>{{$account->aname}}</td>
<td>{{$account->email}}</td>
<!-- <td>{{$account->address}}</td>
<td>{{$account->city}}</td>
<td>{{$account->state}}</td>
<td>{{$account->postalcode}}</td>
<td>{{$account->country}}</td>
<td>{{$account->description}}</td>
<td>{{$account->leadsource}}</td> -->
<td>{{$account->position}}</td>
    <td><a class="btn btn-info btn-info" href="{{url('/contacts/edit/'.$account->id)}}">Edit</a></td>
    <!-- <td><a href="{{url('/contacts/delete/'.$account->id)}}">Delete</a></td> -->
    <td><button class="btn btn-danger btn-del" value="{{$account->id}}">Remove</button></td>
</tr>

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
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Pre') }}</label>

                            <div class="col-md-6">
                                <input id="pre" type="text" class="form-control" value="" readonly required autofocus>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control" value="" readonly required autofocus>
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control" value="" readonly required autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="officephone" class="col-md-4 col-form-label text-md-right">{{ __('Office Phone') }}</label>

                            <div class="col-md-6">
                             <input id="officephone" type="text" class="form-control" name="officephone" value="" required readonly autofocus>
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control" name="mobile" value="" required readonly autofocus>

                            </div>
                        </div>

                                <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="" required readonly autofocus>

                            </div>
                        </div>




                           <div class="form-group row">
                            <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                <input id="department" type="text" class="form-control" name="department" value="" required readonly autofocus>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="aname" class="col-md-4 col-form-label text-md-right">{{ __('Account Name') }}</label>

                            <div class="col-md-6">
                                <input id="aname" type="text" class="form-control" name="aname" value="" required readonly autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="" required readonly autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="" required readonly autofocus>

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
                            <label for="leadsource" class="col-md-4 col-form-label text-md-right">{{ __('Lead Source') }}</label>

                            <div class="col-md-6">
                                <input id="leadsource" type="text" class="form-control" name="leadsource" value=" " required readonly autofocus>
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
            <!-- <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button> -->
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

     var url = "http://localhost/crm/public/contacts/show";

     $(document).on('click','.open_modal',function(){
        var id = $(this).val();
        
        $.get(url + '/' + id, function (data) {
             //success data
            console.log(data[0]);

             $('#id').val(data.id);
             $('#pre').val(data[0].pre);
             $('#fname').val(data[0].fname);
             $('#lname').val(data[0].lname);
             $('#officephone').val(data[0].officephone);
             $('#mobile').val(data[0].mobile);
             $('#title').val(data[0].title);
             $('#department').val(data[0].department);
             $('#aname').val(data[0].aname);
             $('#email').val(data[0].email);
             $('#address').val(data[0].address);
             $('#city').val(data[0].city);
             $('#state').val(data[0].state);
             $('#postalcode').val(data[0].postalcode);
             $('#country').val(data[0].country);
             $('#description').val(data[0].description);
             $('#leadsource').val(data[0].leadsource);
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
                url:"{{url('/contacts/deleterecod')}}",
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