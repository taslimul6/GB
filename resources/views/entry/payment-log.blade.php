@extends('entry.master')


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
                      <td>{{$pay->id}}</td>
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