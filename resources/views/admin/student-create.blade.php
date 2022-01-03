@extends('admin.master')

@section('content')





<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        New Student Registration Form
        <small>beta</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
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
            <form role="form" method="post"  >
              <div class="box-body">


                <div class="form-group">
                  <label >Full Name</label>
                  <input name="full_name" type="text" class="form-control"  placeholder="Full Name">
                </div>

                <div class="form-group">
                    <label > Present Address</label>
                    <input name="Present_Address" type="text" class="form-control"  placeholder="Present Address">
                </div>
  

                <div class="form-group">
                    <label >Permanent Address</label>
                    <input name="Permanent_Address" type="text" class="form-control"  placeholder="Permanent Address">
                </div>
  

                <div class="form-group">
                    <label >Phone Number</label>
                    <input name="phone" type="text" class="form-control"  placeholder="Phone Number">
                </div>
  

                <div class="form-group">
                    <label >Blood Group</label>
                    <input name="blood" type="text" class="form-control"  placeholder="Blood Group">
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
                    <input name="nationality" type="text" class="form-control"  placeholder="Nationality">
                </div>
  

                <div class="form-group">
                    <label >Religion</label>
                    <input name="religion" type="text" class="form-control"  placeholder="Religion">
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
                        <input name="fathers_name" type="text" class="form-control"  placeholder="Father's Name">
                    </div>
 
                    <div class="form-group">
                        <label >Father's Phone Number</label>
                        <input name="fathers_contact" type="text" class="form-control"  placeholder="Religion">
                    </div>
 
                    <div class="form-group">
                        <label >Mother's Name</label>
                        <input name="mothers_name" type="text" class="form-control"  placeholder="Mother's Name">
                    </div>
 
                    <div class="form-group">
                        <label >Emergency Contact Name</label>
                        <input name="emergency_c_name" type="text" class="form-control"  placeholder="Emergency Contact Name">
                    </div>
 
                    <div class="form-group">
                        <label >Emergency Number</label>
                        <input name="emergency_number" type="text" class="form-control"  placeholder="Emergency Number">
                    </div>
 
                    <div class="form-group">
                        <label >Emergency Address</label>
                        <input name="emergency_address" type="text" class="form-control"  placeholder="Emergency Address">
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
                        <select class="form-control" name="gender">
                          <option >Male</option>
                          
                        </select>
                      </div>

                      <div class="form-group">
                          <label >Batch</label>
                          <input name="batch" type="text" class="form-control"  placeholder="Batch">
                      </div>
   
                      <div class="form-group">
                          <label >Class Roll</label>
                          <input name="class_roll" type="text" class="form-control"  placeholder="Class Roll">
                      </div>
   
                      <div class="form-group">
                          <label >Exam Roll</label>
                          <input name="exam_roll" type="text" class="form-control"  placeholder="Exam Roll">
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
                        <input name="student_id" type="text" class="form-control"  placeholder="Student Id">
                    </div>
 
                    <div class="form-group">
                        <label >Email</label>
                        <input name="email" type="email" class="form-control"  placeholder="Email Address">
                    </div>
 
                    <div class="form-group">
                        <label >Password</label>
                        <input name="password" type="password" class="form-control"  placeholder="Password">
                    </div>
                  

                </div>


                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Register Now</button>
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