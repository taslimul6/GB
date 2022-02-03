@extends('officer.master')


@section('content')

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Payment Logs
       
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
     
        <div class="row">
            <div class="col-xs-12">
              @if ($errors->any())
                    @foreach ($errors->all() as $error)
                      <div class="alert alert-danger">{{$error}}</div>
                      
                    @endforeach
                    
                  @endif
              
            </div>
          </div>


          <div class="row">
               
            <div class="col-xs-12" >
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
                      <th>Session</th>
                      <th>Semester</th>
                      <th>Payment Details</th>
                      <th>Debit</th>
                      <th>Credit</th>
                      
                      
                      
                    </tr>
                    
                    
                   @isset($pays)
                       
                   
                        
                    @foreach ($pays as $pay)
                        
                    
                    <tr>
                      <td data-toggle="modal" data-target="#modal-{{$pay->id}}" >{{$pay->id}}</td>
                      <td data-toggle="modal" data-target="#modal-{{$pay->id}}" > {{$pay->created_at}}</td>
                      <td data-toggle="modal" data-target="#modal-{{$pay->id}}" > {{$pay->student_id}}</td>
                      <td data-toggle="modal" data-target="#modal-{{$pay->id}}" > {{$pay->session->title}}</td>
                      <td data-toggle="modal" data-target="#modal-{{$pay->id}}" > {{$pay->semester_id}}</td>
                      <td data-toggle="modal" data-target="#modal-{{$pay->id}}" > {{$pay->details}}
                        <p style="margin-bottom:0 !important"> <span style="color:red">TranslationID no:</span>  {{$pay->id}}</p>
                        <p style="margin-bottom:0 !important"> Payslip no: {{$pay->payslip}}</p>
                    </td>
                      <td data-toggle="modal" data-target="#modal-{{$pay->id}}" > {{$pay->debit}}</td>
                      <td data-toggle="modal" data-target="#modal-{{$pay->id}}" > {{$pay->credit}}</td>
                      <td>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$pay->id}}">
                        Delete
                        </button>
                      </td>
                      
                    </tr>

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
                              <input name="student_id" type="hidden" class="form-control" value="{{$pay->student_id}}">
                              <button type="submit" name="delete" class="btn btn-outline " value='1'>Confirm</button>
                              
                              
                            </form>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <div class="modal fade" id="modal-{{$pay->id}}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Payment Edit: {{$pay->id}} </h4>
                          </div>
                          <div class="modal-body">
                            <form role="form" method="post"  action="{{route('of.payment.update' , $pay->id)}}">
                              @csrf
                              @method('put')
                              <div class="box-body">
                                  <input name="student_id" type="hidden" class="form-control" value="{{$pay->student_id}}">
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
  <!-- /.content-wrapper -->
  
  @endsection