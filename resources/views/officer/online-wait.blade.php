@extends('officer.master')


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
                    <th><></th>
                    <th><></th>
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
                        <a class="btn btn-success" href="{{route('of.online.process' , $pay->id)}}">Approve</a>
                        
                    </td>
                    <td> 
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default">
                        Refuse
                      </button>
                        
                        
                        <div class="modal fade" id="modal-default">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Confirmation</h4>
                              </div>
                              <div class="modal-body">
                                <p>Are you sure to refuse this online transaction?</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <form action="{{route('of.online.delete' , $pay->id)}}" method="post">
                                  @csrf
                                  @method('put')
      
                                  <button type="submit" class="btn btn-danger" >Confirm Refuse</button>
      
      
                              </form>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                      </div>
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