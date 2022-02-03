@extends('viewer.master')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Profile
        
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
        
      <div class="container bg-white">
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
                <h4 class="card-subtitle mb-2 ">Batch : {{ $data->batch }}</h4>
                
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
                    <td> {{ $data->user->email }}</td>
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
                      <td> @isset($data->session->title) {{ $data->session->title }} @endisset</td>
                  </tr>
                  <tr>
                    <th class="smk-w-30"> Graduated Semester Session: </td>
                    <td> </td>
                  </tr>
                  <tr>
                    <th class="smk-w-30"> Current Session: </td>
                    <td>@isset($status->session->title)
                      {{ $status->session->title }}
                    @endisset</td>
                  </tr>
                  <tr>
                    <th class="smk-w-30"> Current Semester: </td>
                    <td>@isset($status->session->title)
                      {{ $status->semester_id }}
                    @endisset</td>
                  </tr>
                 
                  
                </table>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
        </div>

      </div>
      
 
      

        




    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->




@endsection