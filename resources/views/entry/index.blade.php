@extends('entry.master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$tst}}</h3>

              <h4>Total Students</h4>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$tst}}</h3>

              <h4>New Students</h4>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$deps}} </h3>

              <h4>Total Departments</h4>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$ats}}</h3>

              <p>Total Transactions</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-6 ">
          <!-- Custom tabs (Charts with tabs)-->
          
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
         
          <!-- /.box -->

          <!-- New Student widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">New Transactions</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
               
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              
            </div>
            <div class="box-footer clearfix">
              <table class="table table-hover">
                <tr>
                  
                  <th>Date</th>
                  
                  <th>Session</th>
                  
                  <th>Payment Details</th>
                  <th>Amount</th>
                  
                  
                  
                </tr>
                
                
               @isset($pays)
                   
               
                    
                @foreach ($pays as $pay)
                    
                
                <tr>
                  
                  <td>{{$pay->created_at}}</td>
                 
                  <td>{{$pay->session_id}}</td>
                  
                  <td>{{$pay->details}}
                    <p style="margin-bottom:0 !important"> <span style="color:red">TranslationID no:</span>  {{$pay->id}}</p>
                    <p style="margin-bottom:0 !important"> Payslip no: {{$pay->payslip}}</p>
                </td>
                  <td>{{$pay->amount}}</td>
                  
                  
                </tr>
                @endforeach
                @endisset
                
              </table>
            </div>
          </div>
           <!-- New payment widget -->
           <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">New Student</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
               
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              
            </div>
            <div class="box-footer clearfix">
              <table class="table table-hover">
                <tr>
                  <th>Joined at</th>
                  <th>Studnet ID</th>
                  <th>Full Name</th>
                  <th>Contact</th>
                  
                </tr>
                @foreach ($all as $data)
                    
                
                <tr>
                  <td>{{ $data->created_at }}</td>
                  <td>{{ $data->student_id }}</td>
                  <td><a href="{{route('student.show', $data->id)}}">{{ $data->full_name }}</a></td>
                  <td>{{ $data->phone }}</td>
                 
                </tr>
                @endforeach
                
              </table>
            </div>
          </div>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-6 ">
          <!-- Custom tabs (Charts with tabs)-->
          
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
         
          <!-- /.box -->

          <!-- New Student widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Latest Online Transactions</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
               
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              
            </div>
            <div class="box-footer clearfix">


              
           <table class="table table-hover">
                <tr>
                  
                  <th>Date</th>
                  
                  <th>Session</th>
                  
                  <th>Payment Details</th>
                  <th>Amount</th>
                  
                  
                  
                </tr>
                
                
               @isset($opays)
                   
               
                    
                @foreach ($opays as $opay)
                    
                
                <tr>
                  
                  <td>{{$opay->created_at}}</td>
                 
                  <td>{{$opay->session->title}}</td>
                  
                  <td>{{$opay->details}}
                    <p style="margin-bottom:0 !important"> <span style="color:red">Bank no:</span>  {{$opay->bank_ac}}</p>
                    <p style="margin-bottom:0 !important"> bank tnxid no: {{$opay->bank_tnxid}}</p>
                </td>
                  <td>{{$opay->credit}}</td>
                  
                  
                </tr>
                @endforeach
                @endisset
                
              </table> 
            </div>
          </div>
           <!-- New payment widget -->
           
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  


@endsection