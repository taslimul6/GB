@extends('student.master')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Online Payment Entry 
       
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
        
        <div class="container bg-white">
            <div class="row">
                <div class="col-md-12">
                  @if (Session()->has('message')) 
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <i class="fa fa-warning"></i>
        
                      <h3 class="box-title">Successful Transaction</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Transaction Details!</h4>
                         <h5>{{Session('message')}} </h5> 
                         <h5>{{Session('details')}} </h5>
                      </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  @endif

                  @if (Session()->has('delete')) 
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <i class="fa fa-warning"></i>
        
                      <h3 class="box-title"> Transaction Deleted Successfully</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Transaction Details!</h4>
                         <h5>{{Session('delete')}} </h5> 
                         
                      </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  @endif

                    
                   
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                      <div class="alert alert-danger">{{$error}}</div>
                      
                    @endforeach
                    
                  @endif
                    <!-- general form elements -->
                    
                    </div>
                    <!-- /.box -->
          
                  </div>

            
            





          
            
            
           
          
            
            
            <div class="row">
                <div class="col-md-12" style="padding: 0 !important;">
                    <!-- general form elements -->
                    <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title"> Entry Form</h3>
                      </div>
                      <!-- /.box-header -->
                      <!-- form start -->


                      <form role="form" method="post"  action="{{route('st.pstore')}}">
                        @csrf
                        
                        
                        <div class="box-body">

                          
                            
                            <input name="student_id" type="hidden" class="form-control" value="{{$data->student_id}}">
                          <div class="form-group">
                            <label >Payment Type </label>
                            <select class="form-control" name="details">

                              <option > Admission Fees </option>
                              <option > Library Fees </option>
                              <option > Semester Fees </option>
                              <option > Improvement Fees </option>
                              <option > Others </option>

                              
                            </select>
                          </div>
                        
                          <div class="form-group">
                            <label >Session</label>
                            <select class="form-control" name="session_id">
                                @foreach($sess as $ses )
      
                                  <option value="{{$ses->id}}"> {{$ses->title}} </option>
                                @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label >Semester</label>
                            
                                
                              <select name="semester_id" class="form-control">
                                <option value="1">1st Semester</option>
                                <option value="2">2nd Semester</option>
                                <option value="3">3rd Semester</option>
                                <option value="4">4th Semester</option>
                                <option value="5">5th Semester</option>
                                <option value="6">6th Semester</option>
                                <option value="7">7th Semester</option>
                                <option value="8">8th Semester</option>
                              </select>
                              
                                
                            
                          </div>
                          <div class="form-group">
                            <label >Transaction Type </label>
                            <select class="form-control" name="type">

                              <option value="credit"> Credit (-) </option>
                              

                            </select>
                          </div>
                          
                          <div class="form-group">
                            <label >Bank Account/Rocket No:</label>
                            <input type="text" class="form-control" name='bank_ac'>
                            
                          </div>
                          <div class="form-group">
                            <label >Bank Transaction No:</label>
                            <input type="text" class="form-control" name='bank_tnxid'>
                            
                          </div>
                          <div class="form-group">
                            <label >Amount:</label>
                            <input type="number" class="form-control" name='credit'>
                          </div>
                          <div class="form-group">
                            <label >Contact Number:</label>
                            <input type="number" class="form-control" name='contact'>
                          </div>

                          

                          <div class="box-footer">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                             <b>Request Transaction</b> 
                            </button>
                              <div class="modal fade" id="modal-default">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title">Confirmation</h4>
                                    </div>
                                    <div class="modal-body">
                                      <p>Are you sure to add this transaction?</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                     <button type="submit" name="enroll" class="btn btn-primary">Confirm</button>
                                    </div>
                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            
                            
                          </div>
                          
                        </div>
                        <!-- /.box-body -->
                    </form>
                    
          
                        
                      
                    </div>
                    <!-- /.box -->
          
                  </div>

            </div>
            
           

            
            
              
          </div>
       
     
      
 
      

        




    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->




@endsection