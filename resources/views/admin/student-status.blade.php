@extends('admin.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Departmental Student Report
        <small> </small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        @if (Session()->has('message')) 
        <div class="col-md-12">
          @if ($errors->any())
          @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
            
          @endforeach
          
        @endif
          
        </div>
        @endif
        <!-- left column -->
        <div class="col-md-1"></div>
        <div class="col-md-9">
          <!-- general form elements -->
          <div class="box box-primary">
            
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
                      <option value="11">Graduated</option>
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
                
                  <tr>
                    <th>Studnet ID</th>
                    <th>Exam Roll</th>
                    <th>Full Name</th>
                    <th>Semester</th>
                    <th>Session</th>
                    
                  </tr>
                  
                </tr>
                @isset($status)
                  @foreach ($status as $data)
                  <tr>
                   
                    <td> {{$data->student_id}}</td>
                    <td> {{$data->student->exam_roll}}</td>
                    <td><a href="{{route('student.show', $data->student_id)}}">{{ $data->student->full_name }}</a></td>
                    <td> @if($data->semester_id == '11')
                      Graduated
                      @else
                      {{$data->semester_id}}
                      @endif
                    </td>
                    <td> {{$data->session->title}}</td>
                    
                    
                  </tr>
                      
                  @endforeach
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