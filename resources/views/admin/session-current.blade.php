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
                  <h3 class="box-title">Set Current Session</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{route('crnts.store')}}">
                  <div class="box-body">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label >All Sessions</label>
                        <select class="form-control" name="session_id">
                          @foreach($sess as $ses )
        
                          <option value="{{$ses->id}}"> {{$ses->title}} </option>
                        @endforeach
                        
                          
                        </select>
                    </div>
    
                  <!-- /.box-body -->
    
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Set Session</button>
                  </div>
                </div>
                </form>
            </div>
            <br>
            <div class="alert alert-success"><b>Current Session is : @isset($cs->session->title) {{$cs->session->title}} @endisset</b></div>

        </div>
        
  
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->










@endsection