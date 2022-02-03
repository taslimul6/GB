@extends('student.master')

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
          @if (Session()->has('emessage')) 
          <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             
             {{Session('emessage')}}
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
            <form role="form" method="post"  action="{{route('profile.update' ,auth()->user()->id)}}">
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


                    <div class="box-footer">
                        <button type="submit" class="btn btn-success" name="up" value="1">Update Profile</button>
                      </div>

                </form>
                  
                </div>
                <!-- /.box-body -->
  
                
              
            </div>
            
  
          </div>
         

          
            
  
        </div>

        <hr>
        <div class="row">
            <div class="col-md-6">

                <!-- general form elements -->
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Email Change</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  
                    <div class="box-body">
                        <form action="{{route('profile.update' ,$student->user_id)}}" method="post">
                            @csrf
                            @method('PUT')
                        
                            <div class="form-group">
                                <label >Email</label>
                                <input name="email" type="text" class="form-control" value="{{$student->email}}" placeholder="Father's Name">
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-success" name="e" value="1">Update Email</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <!-- general form elements -->
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Password Change</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  
                    <div class="box-body">
                        <form action="{{route('profile.update' ,$student->user_id)}}" method="post">
                            @csrf
                            @method('PUT')
                        
                            
                            <div class="form-group">
                                <label >New Password</label>
                                <input name="new" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Repact New Password</label>
                                <input name="new1" type="text" class="form-control"  >
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-success" name="pass" value="1">Update Password</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
     

        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->










@endsection