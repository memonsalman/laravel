
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">

    <div class="col-md-2">
        <div class="main-sidebar">
        
            <ul>
               <li><a href="{{url('tasks/create')}}">Create Task</a></li>
               <li><a href="{{url('tasks')}}">View Tasks</a></li>
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
                <div class="card-header">{{ __('View Tasks') }}</div>
            <table id="myTable" class="display" border="1">
                 <thead>
                <tr>
                    <td>Subject</td>
                   <td>Contact</td>
                   <td>Related to</td>
                    <td>Due Date</td>
                    <td>Assigned to</td>
                    
                    <td>Edit</td>
                    <td>Delete</td>
                    
                </tr>
                 </thead>

                @foreach($tasks as $account)
 <tbody>
<tr class="id{{$account->id}}">

<td><button class="btn-detail open_modal" value="{{$account->id}}">{{$account->subject}}</button></td>

<td>{{$account->contactname}}</td>
<td>{{$account->relatedto}}</td>
<td>{{$account->duedate}}</td>
<td>{{$account->position}}</td>
    <td><a class="btn btn-info btn-info" href="{{url('/tasks/edit/'.$account->id)}}">Edit</a></td>
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
                            <label for="subject" class="col-md-4 col-form-label text-md-right">{{ __('Subject') }}</label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control" value="" readonly required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                            <div class="col-md-6">
                             <input id="status" type="text" class="form-control" name="status" value="" required readonly autofocus>
                            </div>
                        </div>

                             <div class="form-group row">
                            <label for="startdate" class="col-md-4 col-form-label text-md-right">{{ __('Start Date') }}</label>

                            <div class="col-md-6">
                                <input id="startdate" type="text" class="form-control" name="startdate" value="" required readonly autofocus>

                            </div>
                        </div>


                            <div class="form-group row">
                            <label for="duedate" class="col-md-4 col-form-label text-md-right">{{ __('Due Date') }}</label>

                            <div class="col-md-6">
                                <input id="duedate" type="text" class="form-control" name="duedate" value="" required readonly autofocus>

                            </div>
                        </div>

                           <div class="form-group row">
                            <label for="relatedto" class="col-md-4 col-form-label text-md-right">{{ __('Related To') }}</label>

                            <div class="col-md-6">
                                <input id="relatedto" type="text" class="form-control" name="relatedto" value="" required readonly autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contactname" class="col-md-4 col-form-label text-md-right">{{ __('Contact Name') }}</label>

                            <div class="col-md-6">
                                <input id="contactname" type="text" class="form-control" name="contactname" value="" required readonly autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="priority" class="col-md-4 col-form-label text-md-right">{{ __('Priority') }}</label>

                            <div class="col-md-6">
                                <input id="priority" type="text" class="form-control" name="priority" value="" required readonly autofocus>

                            </div>
                        </div>


                        
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control" name="description" value="" required readonly autofocus></textarea>
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

     var url = "http://localhost/crm/public/tasks/show";

     $(document).on('click','.open_modal',function(){
        var id = $(this).val();
        
        $.get(url + '/' + id, function (data) {
             //success data
            console.log(data[0]);

             $('#id').val(data.id);
             $('#subject').val(data[0].subject);
             $('#status').val(data[0].status);
             $('#startdate').val(data[0].startdate);
             $('#duedate').val(data[0].duedate);
             $('#relatedto').val(data[0].relatedto);
             $('#contactname').val(data[0].contactname);
             $('#priority').val(data[0].priority);
             $('#description').val(data[0].description);
             $('#assignedto').val(data[0].position);
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
                url:"{{url('/tasks/deleterecod')}}",
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
