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
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Department Information</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="get" action="{{route('department.create')}}">
              <div class="box-body">

                

                <div class="form-group">
                    <label >Department Name</label>
                    <input type="text" class="form-control" placeholder="Department Name" name="name" @isset($name) value="{{$name }}" @endisset>
                </div>
  

                  <div class="form-group">
                    <label >Course Name</label>
                    <input type="text" class="form-control" placeholder="Course Name" name="course_name"  @isset($name) value="{{$course }}" @endisset>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name='next' value="1"> Next</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
          

         

        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>


@endsection