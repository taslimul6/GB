@extends('admin.master')


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
                  @if($src)
                  Search result for : "{{$src}}"
                    @else Session Information
                    @endif
                </h3>

              <div class="box-tools">
                  <form action="{{route('session.index')}}" mathod='get'>
                        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                        <input type="text" name="src" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                        </div>
                    </form>
              </div>
            </div>
            

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Number</th>
                  <th>Session Name</th>
                  
                  
                  <th><></th>
                </tr>
                
                @foreach ($all as $data)
                    
                
                <tr>
                  <td>{{ $i++ }}</td>
                  <td><a href="{{route('session.show', $data->id)}}">{{ $data->title }}</td>
                  
                  
                  
                 
                  <td><a href="#">Edit</a></td>
                  <td> <form action="{{route('session.destroy', $data->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Delete</button>
                  </form>
                </td>
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