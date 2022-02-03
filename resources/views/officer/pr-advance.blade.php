@extends('officer.master')


@section('content')

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Advance Transaction Reporting
       
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
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                </div>
                <div class="box-body">
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-payslip">
                    Filter By Payslip
                  </button>
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-trans">
                    Filter By TransactionID
                  </button>
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-bank">
                    Filter By Online Bank TransactionID
                  </button>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-date">
                    Filter By Date
                  </button>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-month">
                    Filter By Month
                  </button>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-session">
                    Filter By Session
                  </button>
                </div>
              </div>
            </div>
          </div>


          <div class="modal fade" id="modal-payslip">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Filter By Payslip</h4>
                </div>
                    <form action="{{route('of.prA')}}">

                        <div class="modal-body">   
                            <label> Playslip Number </label>
                        <input type="number" class="form-control" Placeholder="Payslip Number" name="payslip">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="p">Search</button>
                        </div>
                    </form>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <div class="modal fade" id="modal-trans">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Filter By TransactionID</h4>
                </div>
                    <form action="{{route('of.prA')}}">

                        <div class="modal-body">   
                            <label> TransactionID Number </label>
                        <input type="number" class="form-control" Placeholder="TransactionID Number" name="trans">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="t" >Search</button>
                        </div>
                    </form>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <div class="modal fade" id="modal-bank">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Filter By TransactionID</h4>
                </div>
                    <form action="{{route('of.prA')}}">

                        <div class="modal-body">   
                            <label> TransactionID Number </label>
                        <input type="text" class="form-control" Placeholder="TransactionID Number" name="bank">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="b" >Search</button>
                        </div>
                    </form>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <div class="modal fade" id="modal-date">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Filter By Date</h4>
                </div>
                    <form action="{{route('of.prA')}}">

                        <div class="modal-body">   
                            <label> Pick Date </label>
                        <input type="date" class="form-control"  name="date">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="d" value='1'>Search</button>
                        </div>
                    </form>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <div class="modal fade" id="modal-month">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Filter By Month</h4>
                </div>
                    <form action="{{route('of.prA')}}">

                        <div class="modal-body">   
                            <label> Pick Month </label>
                        <input type="month" class="form-control"  name="month">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"  >Search</button>
                        </div>
                    </form>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <div class="modal fade" id="modal-session">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Filter By Session</h4>
                </div>
                    <form action="{{route('of.prA')}}">

                        <div class="modal-body">   
                            <label> Select Session </label>
                        <select name="session" id="" class="form-control">
                          @foreach ($all as $new)
                          <option value="{{$new->id}}">{{$new->title}}</option>
                            
                          @endforeach
                        </select>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="p">Search</button>
                        </div>
                    </form>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <div class="row">
               
            <div class="col-xs-12" >
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
                      <td>{{$i++}}</td>
                      <td>{{$pay->created_at}}</td>
                      <td>{{$pay->student_id}}</td>
                      <td>{{$pay->session->title}}</td>
                      <td>{{$pay->semester_id}}</td>
                      <td>{{$pay->details}}
                        <p style="margin-bottom:0 !important"> <span style="color:red">TranslationID no:</span>  {{$pay->id}}</p>
                        <p style="margin-bottom:0 !important"> Payslip no: {{$pay->payslip}}</p>
                    </td>
                      <td>{{$pay->debit}}</td>
                      <td>{{$pay->credit}}</td>
                      
                      
                    </tr>
                    @endforeach

                     @isset($dsum)
                          <tr>
                            <td></td>
                          <td> </td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                              <b>Total Amount:<b>
                            
                          </td>
                          <td> {{$dsum}}</td>
                          <td> {{$csum}}</td>
                          

                        </tr>
                     @endisset
                      
                      
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