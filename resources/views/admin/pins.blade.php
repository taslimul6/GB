@extends('admin.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Security Pins
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
        <div class="col-md-1"></div>
        <div class="col-md-6">

            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Security Pins</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="get" action="{{route('pins')}}">
                  <div class="box-body">
              
                    
                    
                    <input type="text" value="{{$data->pin}}" class="form-control">
    
                  <!-- /.box-body -->
    
                  <div class="box-footer">
                    <button type="submit" name="pin" value="1" class="btn btn-primary">REGENERATE NEW PINS</button>
                  </div>
                </div>
                </form>
            </div>
            <br>
            

        </div>
        
  
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->










@endsection