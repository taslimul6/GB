@extends('admin.master')


@section('content')

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Student List
        <small>Click on the name for details</small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
     
 
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
                  @if($src)
                  Search result for : "{{$src}}"
                    @else Student Information
                    @endif
                </h3>

              <div class="box-tools">
                  <form action="{{route('student.index')}}" mathod='get'>
                        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                        <input type="text" name="student_list" class="form-control pull-right" placeholder="Search">

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
                  <th>Studnet ID</th>
                  <th>Exam Roll</th>
                  <th>Full Name</th>
                  <th>Semester</th>
                  <th>Contact</th>
                  <th><></th>
                  <th><></th>
                </tr>
                @foreach ($all as $data)
                    
                
                <tr>
                  <td>{{ $data->student_id }}</td>
                  <td>{{ $data->exam_roll }}</td>
                  <td><a href="{{route('student.show', $data->id)}}">{{ $data->full_name }}</a></td>
                  <td>{{ $data->blood }}</td>
                  <td>{{ $data->phone }}</td>
                  <td><a  class="btn btn-primary" href="{{ route('student.edit' , $data->id)}}">Edit</a></td>
                  <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default">
                    Delete
                  </button></td>
                  <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Confirmation</h4>
                        </div>
                        <div class="modal-body">
                          <p>Are you sure to Delete this student?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                          <form action="{{ route('student.destroy' , $data->id)}}" method= "post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" name="delete" value="1"> Confirm</button>
                          </form>
                         
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
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