@extends('officer.master')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Payment Entry Page
       
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
        
        <div class="container bg-white">
            <div class="row">
                <div class="col-md-12">
                  @if (Session()->has('message')) 
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <i class="fa fa-warning"></i>
        
                      <h3 class="box-title">Successful Transaction</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Transaction Details!</h4>
                         <h5>{{Session('message')}} </h5> 
                         <h5>{{Session('details')}} </h5>
                      </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  @endif

                  @if (Session()->has('delete')) 
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <i class="fa fa-warning"></i>
        
                      <h3 class="box-title"> Transaction Deleted Successfully</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Transaction Details!</h4>
                         <h5>{{Session('delete')}} </h5> 
                         
                      </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  @endif

                    
                   
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                      <div class="alert alert-danger">{{$error}}</div>
                      
                    @endforeach
                    
                  @endif
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
                    <h4 class="card-subtitle mb-2 ">Batch: {{ $data->batch }}</h4>
                    
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
                        <td>{{ $data->email }} </td>
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
                        <td>{{ $data->session->title }}</td>
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
            <div class="row">
                <div class="col-md-12" style="padding: 0 !important;">
                    <!-- general form elements -->
                    <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title">Payment Entry Form</h3>
                      </div>
                      <!-- /.box-header -->
                      <!-- form start -->


                      <form role="form" method="post"  action="{{route('of.payment.store')}}">
                        @csrf
                        
                        
                        <div class="box-body">

                          
                            
                            <input name="student_id" type="hidden" class="form-control" value="{{$data->student_id}}">
                          <div class="form-group">
                            <label >Payment Type </label>
                            <select class="form-control" name="details">

                              <option > Admission Fees </option>
                              <option > Library Fees </option>
                              <option > Semester Fees </option>
                              <option > Improvement Fees </option>
                              <option > Others </option>

                              
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
                            <label >Transaction Type </label>
                            <select class="form-control" name="type">

                              <option value="credit"> Credit (-) </option>
                              <option value="debit"> Debit (+) </option>

                            </select>
                          </div>
                          <div class="form-group">
                            <label >Amount:</label>
                            <input type="number" class="form-control" name='amount'>
                          </div>
                          <div class="form-group">
                            <label >Payslip No:</label>
                            <input type="number" class="form-control" name='payslip'>
                            
                          </div>

                          

                          <div class="box-footer">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                              ADD Transaction
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
                                      <p>Are you sure to add this transaction?</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                     <button type="submit" name="enroll" class="btn btn-primary">Confirm</button>
                                    </div>
                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            
                            
                          </div>
                          
                        </div>
                        <!-- /.box-body -->
                    </form>
                    
          
                        
                      
                    </div>
                    <!-- /.box -->
          
                  </div>

            </div>
            <div class="row">
               
                <div class="col-xs-12" style="padding: 0 !important;">
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">
                        Transactions Report
                           
                        </h3>
        
                      
                    </div>
                    
        
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                      <table class="table table-hover">
                        <tr>
                          <th>SN</th>
                          <th>Date</th>
                          <th>Session</th>
                          <th>Semester</th>
                          <th>Payment Details</th>
                          <th>Debit</th>
                          <th>Credit</th>
                          <th>Balance</th>
                          <th><></th>
                         
                          
                        </tr>
                        
                        
                        
                            
                        @foreach ($pays as $pay)
                            
                        
                        <tr>
                          <td  data-toggle="modal" data-target="#modal-{{$pay->id}}" >{{$sumk = $i++}}</td>
                          <td data-toggle="modal" data-target="#modal-{{$pay->id}}" >{{$pay->created_at}}</td>
                          <td  data-toggle="modal" data-target="#modal-{{$pay->id}}" >{{$pay->session->title}}</td>
                          <td  data-toggle="modal" data-target="#modal-{{$pay->id}}" >{{$pay->semester_id}}</td>
                          <td    data-toggle="modal" data-target="#modal-{{$pay->id}}" >{{$pay->details}}
                            <p style="margin-bottom:0 !important"> <span style="color:red">TranslationID no:</span>  {{$pay->id}}</p>
                            <p style="margin-bottom:0 !important"> Payslip no: {{$pay->payslip}}</p>
                          </td>
                          <td data-toggle="modal" data-target="#modal-{{$pay->id}}" >{{$pay->debit}}</td>
                          <td  data-toggle="modal" data-target="#modal-{{$pay->id}}" >{{$pay->credit}}</td>
                          <td data-toggle="modal" data-target="#modal-{{$pay->id}}"> {{$pay->balance}}</td>
                          <td>
                           
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$pay->id}}">
                              Delete
                              </button>
                            
                            
                            <div class="modal modal-danger fade" id="modal-danger{{$pay->id}}">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title">Warning!!</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure to delete this transaction?</p>
                                    <p> Details: {{$pay->details}}</p>
                                    <p>TransactionID: {{$pay->id}}</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                    <form action="{{route('of.payment.destroy' , $pay->id)}}" method="post">
                                      @csrf
                                      @method('delete')
                                      <input name="student_id" type="hidden" class="form-control" value="{{$data->student_id}}">
                                      <button type="submit" name="delete" class="btn btn-outline " value='1'>Confirm</button>
                                      
                                      
                                    </form>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>

                                {{--  --}}
                          </td>
                          
                          
                        </tr>
                        <div class="modal fade" id="modal-{{$pay->id}}">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Payment Edit: {{$sumk}} </h4>
                              </div>
                              <div class="modal-body">
                                <form role="form" method="post"  action="{{route('of.payment.update' , $pay->id)}}">
                                  @csrf
                                  @method('put')
                                  <div class="box-body">
                                      <input name="student_id" type="hidden" class="form-control" value="{{$data->student_id}}">
                                    <div class="form-group">
                                      <label >Payment Type </label>
                                      <select class="form-control" name="details">
                                        <option > Admission Fees </option>

                                        <option @if( $pay->details == 'Semester Fees') Selected @endif > Semester Fees </option>
                                        <option @if( $pay->details == 'Library Fees') Selected @endif > Library Fees </option>
                                        <option @if( $pay->details == 'Improvement Fees') Selected @endif > Improvement Fees </option>
                                        <option @if( $pay->details == 'Others') Selected @endif > Others </option>
          
                                        
                                      </select>
                                    </div>
                                  
                                    <div class="form-group">
                                      <label >Session</label>
                                      <select class="form-control" name="session_id">
                                          @foreach($sess as $ses )
                
                                          <option value="{{$ses->id}}"  @if( $pay->session_id == $ses->id) Selected @endif> {{$ses->title}} </option>
                                          @endforeach
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label >Semester</label>
                                      
                                          
                                        <select name="semester_id" class="form-control">
                                          <option value="1" @if( $pay->semester_id == 1) Selected @endif>1st Semester</option>
                                          <option value="2" @if( $pay->semester_id == 2) Selected @endif>2nd Semester</option>
                                          <option value="3" @if( $pay->semester_id == 3) Selected @endif>3rd Semester</option>
                                          <option value="4" @if( $pay->semester_id == 4) Selected @endif>4th Semester</option>
                                          <option value="5" @if( $pay->semester_id == 5) Selected @endif>5th Semester</option>
                                          <option value="6" @if( $pay->semester_id == 6) Selected @endif>6th Semester</option>
                                          <option value="7" @if( $pay->semester_id == 7) Selected @endif>7th Semester</option>
                                          <option value="8" @if( $pay->semester_id == 8) Selected @endif>8th Semester</option>
                                        </select>
                                        
                                          
                                      
                                    </div>
                                    <div class="form-group">
                                      <label >Transaction Type </label>
                                      <select class="form-control"  disabled>
          
                                        <option value="credit" @if( $pay->credit > 0 ) Selected @endif> Credit (-) </option>
                                        <option value="debit" @if( $pay->debit > 0 ) Selected @endif> Debit (+) </option>
          
                                      </select>
                                      
 
                                      <input name="type"  @if( $pay->credit > 0 ) Value="credit" @endif
                                      @if( $pay->debit > 0 ) Value="debit" @endif type="hidden">
                                    </div>
                                    <div class="form-group">
                                      <label >Amount:</label>
                                      <input type="number" class="form-control" name='amount' 
                                      @if( $pay->credit > 0 ) Value="{{$pay->credit}}" @endif
                                      @if( $pay->debit > 0 ) Value="{{$pay->debit}}" @endif
                                    
                                      
                                      >
                                    </div>
                                    <div class="form-group">
                                      <label >Payslip No:</label>
                                      <input type="number" class="form-control" name='payslip' Value='{{$pay->payslip}}'>
                                      
                                    </div>
                                    
                                  </div>
                                  <!-- /.box-body -->
                              
                              
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

                                

                                
                                

                               <button type="submit" name="update" class="btn btn-success" value='1'>Confirm Update </button>
                              
                              
                              </form>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        
                      </div>
                        @endforeach
                        <tr>
                            <td></td>
                          <td> </td>
                          <td></td>
                          <td></td>
                          <td>
                              <b>Total Amount:<b>
                            
                          </td>
                       @isset($pay)
                         
                       
                          <td> {{$dsum}}</td>
                          <td> {{$csum}}</td>
                          <td>{{$pay->balance}}</td>
                        @endisset
                        </tr>
                 
                      </table>
                    </div>
                    <!-- /.box-body -->
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