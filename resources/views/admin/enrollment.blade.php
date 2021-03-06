@extends('admin.master')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student Enrollment Page
       
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
        
        <div class="container bg-white">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title">Search form</h3>
                      </div>
                      <!-- /.box-header -->
                      <!-- form start -->


                      <form role="form" method="get"  >
                        
                        
                        <div class="box-body">
                          <div class="form-group">
                            <label >Student ID</label>
                            <input name="student_id" type="number" class="form-control"   placeholder="Student Id Number">
                          </div>
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Search Student</button>
                          </div>
                          
                        </div>
                        <!-- /.box-body -->
                    </form>
                    
          
                        
                      
                    </div>
                    <!-- /.box -->
          
                  </div>

            </div>





            @if (request('student_id'))
            
            
            <div class="row " style="background:white;">
              <div class="col-md-2" style="margin-top:1vw; margin-bottom:1vw;">
                <img src="http://iems.eub.edu.bd/assets/img/avatars/BlankPerson.png" height="125" width="125" alt="" style="border-radius: 50%;">
    
              </div>
              <div class="col-md-6">
                <div class="card" style="">
                  <div class="card-body">
                    <h2 class="card-title">{{ $data->full_name }} </h2>
                    <h4 class="card-subtitle mb-2 ">{{ $data->student_id }}</h4>
                    <p class="card-text">{{ $data->department->course_name }}</p>
                    <h4 class="card-subtitle mb-2 ">{{ $data->batch }}</h4>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="row" style="margin-top:2vh;">
              
              <div class="col-md-12 " style="padding: 0 !important;">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title"> Contact Information </h3>
                  </div>
                  
      
                  <!-- /.box-header -->
                  <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                      <tr>
                        <th class="smk-w-30"> Mobile: </td>
                        <td>{{ $data->phone }}</td>
                      </tr>
                      <tr>
                        <th class="smk-w-30"> Email: </td>
                        <td> </td>
                      </tr>
                      <tr>
                        <th class="smk-w-30">Present Address: </td>
                        <td>{{ $data->present_address }}</td>
                      </tr>
                      <tr>
                        <th class="smk-w-30"> Permanent Address: </td>
                        <td>{{ $data->permanent_address }}</td>
                      </tr>
                     
                      
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
            </div>
            <div class="row" style="margin-top:2vh;">
              
              <div class="col-md-6 smk-pl-0" >
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title"> Student Information </h3>
                  </div>
                  
      
                  <!-- /.box-header -->
                  <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                      <tr>
                        <th> Full Name: </td>
                        <td>{{ $data->full_name }}</td>
                      </tr>
                      <tr>
                        <th> Date Of Birth: </td>
                        <td>{{ $data->dob }}</td> 
                      </tr>
                      <tr>
                        <th> Gender: </td>
                        <td>{{ $data->gender }}</td>
                      </tr>
                      <tr>
                        <th> Blood: </td>
                        <td>{{ $data->blood }}</td>
                      </tr>
                      <tr>
                        <th> Nationality: </td>
                        <td>{{ $data->nationality }}</td>
                      </tr>
                      <tr>
                        <th> Religion: </td>
                        <td>{{ $data->religion }}</td>
                      </tr>
                      
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              <div class="col-md-6 smk-pr-0" >
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Guardian Information </h3>
                  </div>
                  
      
                  <!-- /.box-header -->
                  <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                      <tr>
                        <th> Father's Name: </td>
                        <td>{{ $data->fathers_name }}</td>
                      </tr>
                      <tr>
                        <th> Father's phone: </td>
                        <td>{{ $data->fathers_contact }}</td>
                      </tr>
                      <tr>
                        <th> Mother's Name: </td>
                        <td>{{ $data->mothers_name }}</td>
                      </tr>
                      <tr>
                        <th> Emergency Contact Name: </td>
                        <td>{{ $data->emergency_c_name }}</td>
                      </tr>
                      <tr>
                        <th style="color:rgb(255, 17, 17)"> Emergency Contact Number: </td>
                        <td>{{ $data->emergency_number }}</td>
                      </tr>
                      <tr>
                        <th> Emergency Contact Address: </td>
                        <td>{{ $data->emergency_address }}</td>
                      </tr>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
    
    
    
    
    
            </div>
            <div class="row" style="margin-top:2vh;">
              
              <div class="col-md-12 " style="padding: 0 !important;">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title"> Academic Information </h3>
                  </div>
                  
      
                  <!-- /.box-header -->
                  <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                      <tr>
                        <th class="smk-w-30"> Department: </td>
                        <td>{{ $data->department->name }}</td>
                      </tr>
                      <tr>
                        <th class="smk-w-30"> Program Name: </td>
                        <td>{{ $data->department->course_name }}</td>
                      </tr>
                      <tr>
                        <th class="smk-w-30">Student ID: </td>
                        <td>{{ $data->student_id }}</td>
                      </tr>
                      <tr>
                        <th class="smk-w-30"> Exam Roll: </td>
                        <td>{{ $data->exam_roll }}</td>
                      </tr>
                      <tr>
                        <th class="smk-w-30"> Batch: </td>
                        <td>{{ $data->batch }}</td>
                      </tr>
                      <tr>
                        <th class="smk-w-30"> Date Of Admission: </td>
                        <td>{{ $data->admission_date }}</td>
                      </tr>
                      <tr>
                        <th class="smk-w-30"> Admitted Semester Session: </td>
                        <td>{{ $data->ad_session }}</td>
                      </tr>
                      <tr>
                        <th class="smk-w-30"> Graduated Semester Session: </td>
                        <td> </td>
                      </tr>
                      <tr>
                        <th class="smk-w-30"> Current Semester: </td>
                        <td>{{ $data->full_name }}</td>
                      </tr>
                     
                      
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title">Enrollment form</h3>
                      </div>
                      <!-- /.box-header -->
                      <!-- form start -->


                      <form role="form" method="post"  action="{{route('enrollment.store')}}">
                        @csrf
                        
                        
                        <div class="box-body">

                          
                            
                            <input name="student_id" type="hidden" class="form-control" value="{{$data->student_id}}">
                          
                          
                          <div class="form-group">

                            <label >Semester</label>
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
                          </div>

                          <div class="form-group">
                            <label >Session</label>
                            <select class="form-control" name="session_id">
                                @foreach($sess as $ses )
      
                                  <option value="{{$ses->id}}"> {{$ses->title}} </option>
                                @endforeach
                            </select>
                          </div>

                          <div class="box-footer">
                            <button type="submit" name="enroll" class="btn btn-primary">Enroll Student</button>
                          </div>
                          
                        </div>
                        <!-- /.box-body -->
                    </form>
                    
          
                        
                      
                    </div>
                    <!-- /.box -->
          
                  </div>

            </div>
           
           

            
            @endif
          </div>
       
     
      
 
      

        




    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->




@endsection