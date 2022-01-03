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
            <form role="form" method="post" action="{{route('department.store')}}">
              <div class="box-body">

                @csrf

                <div class="form-group">
                    <label >Department Name</label>
                    <input type="text" class="form-control" placeholder="Department Name" name="name">
                </div>
  

                  <div class="form-group">
                    <label >Course Name</label>
                    <input type="text" class="form-control" placeholder="Course Name" name="course_name">
                </div>
  

                

                <div class="form-group">
                    <label >Semister: 1</label>
                    <input type="number" class="form-control" placeholder="Ammount" name="p1">
                </div>
 
                <div class="form-group">
                    <label >Semister: 2</label>
                    <input type="number" class="form-control" placeholder="Ammount" name="p2">
                </div>
 
                <div class="form-group">
                    <label >Semister: 3</label>
                    <input type="number" class="form-control" placeholder="Ammount" name="p3">
                </div>
 
                <div class="form-group">
                    <label >Semister: 4</label>
                    <input type="number" class="form-control" placeholder="Ammount" name="p4">
                </div>
 
                <div class="form-group">
                    <label >Semister: 5</label>
                    <input type="number" class="form-control" placeholder="Ammount" name="p5">
                </div>
 
                <div class="form-group">
                    <label >Semister: 6</label>
                    <input type="number" class="form-control" placeholder="Ammount" name="p6">
                </div>
 
                <div class="form-group">
                    <label >Semister: 7</label>
                    <input type="number" class="form-control" placeholder="Ammount" name="p7">
                </div>
 
                <div class="form-group">
                    <label >Semister: 8</label>
                    <input type="number" class="form-control" placeholder="Ammount" name="p8">
                </div>
 
                <div class="form-group">
                    <label >others 1</label>
                    <input type="number" class="form-control" placeholder="Ammount" name="o1">
                </div>
  
                <div class="form-group">
                    <label >others 1</label>
                    <input type="number" class="form-control" placeholder="Ammount" name="o2">
                </div>
  
                <div class="form-group">
                    <label >Total Ammount</label>
                    <input type="number" class="form-control" placeholder="Ammount" name="total">
                </div>
 
      


               
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create Department</button>
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