@extends('admin.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Student Update Form
        <small></small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row ">
        <div class="col-md-12">
          @if (Session()->has('message')) 
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             
             {{Session('message')}}
            </div>
          </div>
          @endif
          @if ($errors->any())
            @foreach ($errors->all() as $error)
              <div class="alert alert-danger">{{$error}}</div>
              
            @endforeach
            
          @endif

        </div>
      </div>
      <div class="row">
        
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">General Informaion</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post"  action="{{route('student.update' ,$student->id)}}">
              @csrf
              @method('PUT')
              
              <div class="box-body">


                <div class="form-group">
                  <label >Full Name</label>
                  <input name="full_name" type="text" class="form-control" value="{{$student->full_name}}"  placeholder="Full Name">
                </div>

                <div class="form-group">
                    <label > Present Address</label>
                    <input name="present_address" type="text" class="form-control" value="{{$student->present_address}}"  placeholder="Present Address">
                </div>
  

                <div class="form-group">
                    <label >Permanent Address</label>
                    <input name="permanent_address" type="text" class="form-control" value="{{$student->permanent_address}}" placeholder="Permanent Address">
                </div>
  

                <div class="form-group">
                    <label >Phone Number</label>
                    <input name="phone" type="text" class="form-control" value="{{$student->phone}}" placeholder="Phone Number">
                </div>
  

                <div class="form-group">
                    <label >Blood Group</label>
                    <input name="blood" type="text" class="form-control" value="{{$student->blood}}" placeholder="Blood Group">
                </div>
  

                <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control" name="gender">
                      <option >Male</option>
                      <option >Female</option>
                      <option>Others</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Date of Birth:</label>
    
                    <div class="input-group date">
                      
                      <input name="dob" type="date" class="form-control pull-right" id="datepicker">
                    </div>
                    <!-- /.input group -->
                </div>
  

                <div class="form-group">
                    <label >Nationality</label>
                    <input name="nationality" type="text" class="form-control" value="{{$student->nationality}}" placeholder="Nationality">
                </div>
  

                <div class="form-group">
                    <label >Religion</label>
                    <input name="religion" type="text" class="form-control" value="{{$student->religion}}" placeholder="Religion">
                </div>
  









                
                <div class="form-group">
                  <label for="exampleInputFile">Profile Image</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <br>
                <br>
                
              </div>
              <!-- /.box-body -->

              
            
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (right) -->
        <!-- left column -->
        <div class="col-md-6">

            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Guardian Information</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              
                <div class="box-body">

                  

                    <div class="form-group">
                        <label >Father's Name</label>
                        <input name="fathers_name" type="text" class="form-control" value="{{$student->fathers_name}}" placeholder="Father's Name">
                    </div>
 
                    <div class="form-group">
                        <label >Father's Phone Number</label>
                        <input name="fathers_contact" type="text" class="form-control" value="{{$student->fathers_contact}}" placeholder="Religion">
                    </div>
 
                    <div class="form-group">
                        <label >Mother's Name</label>
                        <input name="mothers_name" type="text" class="form-control" value="{{$student->mothers_name}}" placeholder="Mother's Name">
                    </div>
 
                    <div class="form-group">
                        <label >Emergency Contact Name</label>
                        <input name="emergency_c_name" type="text" class="form-control" value="{{$student->emergency_c_name}}" placeholder="Emergency Contact Name">
                    </div>
 
                    <div class="form-group">
                        <label >Emergency Number</label>
                        <input name="emergency_number" type="text" class="form-control" value="{{$student->emergency_number}}" placeholder="Emergency Number">
                    </div>
 
                    <div class="form-group">
                        <label >Emergency Address</label>
                        <input name="emergency_address" type="text" class="form-control" value="{{$student->emergency_address}}" placeholder="Emergency Address">
                    </div>
                  
                </div>
                <!-- /.box-body -->
  
                
              
            </div>
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Academic Information</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                
                  <div class="box-body">
  
                      <div class="form-group">
                        <label>Department</label>
                        <select class="form-control" name="department_id">
                          @foreach($deps as $dep )

                            <option value="{{$dep->id}}"> {{$dep->name}} </option>
                          @endforeach
                          
                          
                        </select>
                      </div>

                      <div class="form-group">
                          <label >Batch</label>
                          <input name="batch" type="text" class="form-control" value="{{$student->batch}}" placeholder="Batch">
                      </div>
   
                      <div class="form-group">
                          <label >Class Roll</label>
                          <input name="class_roll" type="text" class="form-control" value="{{$student->class_roll}}" placeholder="Class Roll">
                      </div>
   
                      <div class="form-group">
                          <label >Exam Roll</label>
                          <input name="exam_roll" type="text" class="form-control" value="{{$student->exam_roll}}" placeholder="Exam Roll">
                      </div>
                         
                      <div class="form-group">
                        <label >Admitted Date</label>
                        <input name="admission_date" type="date" class="form-control" value="{{$student->admission_date}}" placeholder=" ">
                    </div>
 
                       
                    <div class="form-group">
                      <label >Admitted Session</label>
                      <select class="form-control" name="ad_session">
                        @foreach($sess as $ses )

                        <option value="{{$ses->id}}"> {{$ses->title}} </option>
                      @endforeach
                      
                        
                      </select>
                  </div>

   
                      
   
                    
                    
                  </div>
                  <!-- /.box-body -->
    
                  
                
              </div>
            <!-- /.box -->
  
          </div>
          <div class="col-md-2">

          </div>

          <div class="col-md-8 d-flex align-items-center">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Login Information</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              
                <div class="box-body">

                    

                    <div class="form-group">
                        <label >Student ID</label>
                        <input name="student_id" type="text" class="form-control" value="{{$student->student_id}}"  placeholder="Student Id" disabled>
                    </div>
 
                    <div class="form-group">
                        <label >Email</label>
                        <input name="email" type="email" class="form-control" value="{{$student->email}}" placeholder="Email Address">
                    </div>
 
                    <div class="form-group">
                        <label >Password</label>
                        <input name="password" type="text" class="form-control"  placeholder="Password">
                    </div>
                  

                </div>


                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Update Now</button>
                </div>

              </form>

          </div>
  
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->










@endsection