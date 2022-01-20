@extends('admin.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create Departments
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
        @if (Session()->has('message')) 
        <div class="col-md-12">
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
           
           {{Session('message')}}
          </div>
        </div>
        @endif
        <!-- left column -->
        <div class="col-md-1"></div>
        <div class="col-md-9">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Department Information</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="get"  >
                        
                        
                <div class="box-body">
                  <div class="form-group">
                    <label >Select Department</label>
                    <select name="department_id" class="form-control">
                        @foreach ($all as $dep)
                        <option value="{{$dep->id}}" @if ($dep->id == $department_id)
                            Selected
                        @endif>{{$dep->name}}</option>
                        @endforeach
                        
                    </select>
                    <label >Select Semester</label>
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
                    <label >Select Session</label>
                    <select name="session_id" class="form-control">
                        @foreach ($sess as $ses)
                        <option value="{{$ses->id}}" @if ($ses->id == $session_id)
                            Selected
                        @endif>{{$ses->title}}</option>
                        @endforeach
                        
                    </select>
                    
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name='next' value='1'>Next</button>
                  </div>
                  
                </div>
                <!-- /.box-body -->
            </form>
          <!-- /.box -->
          

      

        </div>
        <!--/.col (left) -->
      </div>
    </div>
      <!-- /.row -->
      <div class="row">
        
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
                   Student Information
                    
                </h3>

              
            </div>
            

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Select</th>
                  <th>Student ID</th>
                  <th>Student Name</th>
                  <th>Session</th>
                  <th>Semester</th>
                  
                  
                  <th><></th>
                </tr>
                @isset($status)
                  
                
                <tr>
                  <td> # </td>
                  <td> {{$status->student_id}}</td>
                  <td> {{dd($status->student)}}</td>
                  <td> {{$status->session->title}}</td>
                  <td> {{$status->semester_id}}</td>
                  
                </tr>
                @endisset
                
               
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    
    </section>
    <!-- /.content -->
  </div>


@endsection