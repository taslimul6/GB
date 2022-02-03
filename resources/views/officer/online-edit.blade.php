@extends('officer.master')

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
                   
                    <div class="col-md-12">
                        
                        <div class="box box-default">
                          <div class="box-header with-border">
                            <h3 class="box-title">Student Information</h3>
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">
                               <h3> <b> Name: {{$data->student->full_name }} </b></h3> 
                               <h4> StudentID: {{$data->student_id }} </h4> 
                               <h4> Exam Roll: {{$data->exam_roll }} </h4> 
                               
                            
                          </div>
                          <!-- /.box-body -->
                        </div>

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


                      <form role="form" method="post"  action="{{route('of.onlineStore' ,$data->id )}}">
                        @csrf

                        <input name="student_id" type="hidden" class="form-control" value="{{$data->student_id}}">
                        
                        <div class="box-body">
                          <div class="form-group">
                            <label >Payment Type </label>
                            <select class="form-control" name="details">

                                <option @if( $data->details == 'Semester Fees') Selected @endif > Semester Fees [Online] </option>
                                <option @if( $data->details == 'Library Fees') Selected @endif > Library Fees [Online]</option>
                                <option @if( $data->details == 'Improvement Fees') Selected @endif > Improvement Fees [Online] </option>
                                <option @if( $data->details == 'Others') Selected @endif > Others [Online] </option>
                              
                            </select>
                          </div>
                        
                          <div class="form-group">
                            <label >Session</label>
                            <select class="form-control" name="session_id">
                                @foreach($sess as $ses )
      
                                  <option value="{{$ses->id}}"  @if( $data->session_id == $ses->id) Selected @endif> {{$ses->title}} </option>
                                @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label >Semester</label>
                            
                                
                              <select name="semester_id" class="form-control">
                                <option value="1" @if( $data->semester_id == 1) Selected @endif>1st Semester</option>
                                <option value="2" @if( $data->semester_id == 2) Selected @endif>2nd Semester</option>
                                <option value="3" @if( $data->semester_id == 3) Selected @endif>3rd Semester</option>
                                <option value="4" @if( $data->semester_id == 4) Selected @endif>4th Semester</option>
                                <option value="5" @if( $data->semester_id == 5) Selected @endif>5th Semester</option>
                                <option value="6" @if( $data->semester_id == 6) Selected @endif>6th Semester</option>
                                <option value="7" @if( $data->semester_id == 7) Selected @endif>7th Semester</option>
                                <option value="8" @if( $data->semester_id == 8) Selected @endif>8th Semester</option>
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
                            <input type="text" class="form-control" name='bank_ac' value="{{$data->bank_ac}}">
                            
                          </div>
                          <div class="form-group">
                            <label >Bank Transaction No:</label>
                            <input type="text" class="form-control" name='bank_tnxid' value="{{$data->bank_tnxid}}">
                            
                          </div>
                          <div class="form-group">
                            <label >Amount:</label>
                            <input type="number" class="form-control" name='credit' value="{{$data->credit}}">
                          </div>
                          <div class="form-group">
                            <label >Contact Number:</label>
                            <input type="number" class="form-control" name='contact' value="{{$data->contact}}">
                          </div>
                          <div class="form-group">
                            <label >Payslip:</label>
                            <input type="number" class="form-control" name='payslip' >
                          </div>

                          

                          <div class="box-footer">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                             <b>Confirm Update</b> 
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
                                     <button type="submit" name="confirm" class="btn btn-primary">Confirm</button>
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