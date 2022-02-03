@extends('student.master')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       My Payment Report
       
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
        
        <div class="container bg-white">
            <div class="row">
                <div class="col-md-12">
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                      <div class="alert alert-danger">{{$error}}</div>
                      
                    @endforeach
                    
                  @endif
                    <!-- general form elements -->
                   
                    <!-- /.box -->
          
                  </div>

            </div>
            





           
            
            
         
            <div class="row" style="margin-top:2vh;">
              
              <div class="col-md-12 " style="padding: 0 !important;">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title"> Payment Summary</h3>
                  </div>
                  
      
                  <!-- /.box-header -->
                  <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                      <tr>
                        <th class="smk-w-30"> Total Debit: </td>
                        <td><b>{{ $dsum }}</b></td>
                      </tr>
                      <tr>
                        <th class="smk-w-30">Total Credit: </td>
                        <td><b>{{ $csum }}</b></td>
                      </tr>
                      <tr>
                        <th class="smk-w-30">Balance: </td>
                        <td style="color:rgb(201, 0, 0)"><b>{{ $status->balance }}</b> </td>
                      </tr>
                      
                     
                      
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
            </div>
       
            <div class="row">
                <div class="col-xs-12" style="padding: 0 !important;">
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">
                        Full Transactions Report
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
                          
                          
                          
                        </tr>
                        
                        
                        
                            
                        @foreach ($pays as $pay)
                            
                        
                        <tr>
                          <td> <b>{{$i++}}</b></td>
                          <td> <b>{{$pay->created_at}}</b></td>
                          <td> <b>{{$pay->session->title}}</b></td>
                          <td> <b>{{$pay->semester_id}}</b></td>
                          <td> <b>{{$pay->details}}
                            <p style="margin-bottom:0 !important"> <span style="color:red">TranslationID no:</span>  {{$pay->id}}</p>
                            <p style="margin-bottom:0 !important"> Payslip no: {{$pay->payslip}}</p></b>
                        </td>
                        <td>  <b>{{$pay->debit}}</b></td>
                        <td> <b>{{$pay->credit}}</b></td>
                        <td> <b>{{$pay->balance}}</b></td>
                          
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                          <td> </td>
                          <td></td>
                          <td></td>
                          <td>
                              <b>Total Amount:<b>
                            
                          </td> 
                         
                          <td> <b> {{$dsum}}</b></td>
                          <td>  <b>{{$csum}}</b></td>
                          <td> <b>{{$status->balance}}</b></td>
                         

                        </tr>
                        
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
            </div>
           
           

            
            
              
          </div>
       
     
      
 
      

        




    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->




@endsection