@extends('admin.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin Panel Registration Form 
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
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
            <form role="form" method="post"  action="{{route('member.store')}}">
              @csrf
              
              <div class="box-body">


                <div class="form-group">
                  <label >Full Name</label>
                  <input name="full_name" type="text" class="form-control" value="{{old('full_name')}}"  placeholder="Full Name">
                </div>

                <div class="form-group">
                    <label > Present Address</label>
                    <input name="present_address" type="text" class="form-control" value="{{old('present_address')}}"  placeholder="Present Address">
                </div>
  

                <div class="form-group">
                    <label >Permanent Address</label>
                    <input name="permanent_address" type="text" class="form-control" value="{{old('permanent_address')}}" placeholder="Permanent Address">
                </div>
  

                <div class="form-group">
                    <label >Phone Number</label>
                    <input name="phone" type="text" class="form-control" value="{{old('phone')}}" placeholder="Phone Number">
                </div>
  

                <div class="form-group">
                    <label >Blood Group</label>
                    <input name="blood" type="text" class="form-control" value="{{old('blood')}}" placeholder="Blood Group">
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
                    <input name="nationality" type="text" class="form-control" value="{{old('nationality')}}" placeholder="Nationality">
                </div>
  

                <div class="form-group">
                    <label >Religion</label>
                    <input name="religion" type="text" class="form-control" value="{{old('religion')}}" placeholder="Religion">
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Profile Image</label>
                  <input type="file" id="exampleInputFile">

                
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label>Designation</label>
                    <input name="designation" type="text" class="form-control" value="{{old('designation')}}" placeholder="designation">
                </div>
                <div class="form-group">
                    <label>Admin Role</label>
                    <select class="form-control" name="role">
                      <option value='viewer' >Adminstrative Viewer</option>
                      <option  value='officer'>Accounting Officer</option>
                      <option value='entry'>Entry Executive</option>
                    </select>
                </div>
                <div class="form-group">
                    <label >Member ID</label>
                    <input name="member_id" type="text" class="form-control" value="{{old('member_id')}}" placeholder="Member Id">
                </div>

                <div class="form-group">
                    <label >Email</label>
                    <input name="email" type="email" class="form-control" value="{{old('email')}}" placeholder="Email Address">
                </div>

                <div class="form-group">
                    <label >Password</label>
                    <input name="password" type="password" class="form-control"  placeholder="Password">
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Register Now</button>
                  </div>
                
              </div>
              <!-- /.box-body -->

              
            
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (right) -->
        <!-- left column -->
    

              </form>

          </div>
  
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->










@endsection