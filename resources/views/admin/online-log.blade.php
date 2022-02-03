@extends('admin.master')


@section('content')

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Waiting Online Payment for approve/disapprove
        
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
                    <th>ID</th>
                    <th>Date</th>
                    <th>Student ID</th> 
                    <th>Exam_roll</th>
                    <th>Session</th>
                    <th>Semester</th>
                    <th>Payment Details</th>
                   
                    <th>Credit</th>
                    <th>Contact</th>
                    <th>Status</th>
                    
                </tr>
                
                @foreach ($datas as $pay)
                    
                
                <tr>
                    <td >{{$pay->id}}</td>
                    <td >{{$pay->created_at}}</td>
                    <td >{{$pay->student_id}}</td>
                    <td >{{$pay->exam_roll}}</td>
                    <td >{{$pay->session->title}}</td>
                    <td >{{$pay->semester_id}}</td>
                    <td  >{{$pay->details}}

                        <p style="margin-bottom:0 !important"> Bank Account: {{$pay->bank_ac}}</p>
                      <p style="margin-bottom:0 !important"> <span style="color:red">Bank TNXID:</span>  {{$pay->bank_tnxid}}</p>
                     
                    </td>
                    
                    <td >{{$pay->credit}}</td>
                    <td >{{$pay->contact}}</td>
                    <td> 
                        @if ($pay->state == 2)
                        <h5><b style="color:green">Approved</b></h5>
                        @endif
                        @if ($pay->state == 3)
                            <h5><b style="color:red">Refused</b></h5>
                        @endif
                        
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