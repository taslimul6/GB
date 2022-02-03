@extends('viewer.master')


@section('content')

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Sessions
        <small>Click on the name for details</small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
     
 
      <div class="row">
        @if (Session()->has('message')) 
        <div class="col-md-12">
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
           
           {{Session('message')}}
          </div>
        </div>
        @endif
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
                  
                    Session Information
                  
                </h3>

              
            </div>
            

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Number</th>
                  <th>Session Name</th>
                  
                  
                 
                </tr>
                
                @foreach ($all as $data)
                    
                
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $data->title }}</td>
                  
               
                </tr>
                @endforeach
                
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
  <!-- /.content-wrapper -->
  
  @endsection