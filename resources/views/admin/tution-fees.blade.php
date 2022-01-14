@extends('admin.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create Departments
        <small>beta</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        @if (Session()->has('message')) 
        <div class="col-md-12">
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
           
           {{Session('message')}}
          </div>
        </div>
        @endif
        <!-- left column -->
        <div class="col-md-1"></div>
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Department Information</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="get"  >
                        
                        
                <div class="box-body">
                  <div class="form-group">
                    <label >Select Department</label>
                    <select name="department_id" class="form-control">
                        @foreach ($all as $dep)
                        <option value="{{$dep->id}}" @if ($dep->id == $department_id)
                            Selected
                        @endif>{{$dep->name}}</option>
                        @endforeach
                        
                    </select>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name='next' value='1'>Next</button>
                  </div>
                  
                </div>
                <!-- /.box-body -->
            </form>
          <!-- /.box -->
          

          @isset ($next)
           
          
                  <div class="box box-primary mt-3">
                    <div class="box-header with-border">
                      <h3 class="box-title">Tution Fees</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('tutionStore')}}">
                      <div class="box-body">

                          @csrf
                          @method('PUT')

                          <div class="form-group">
                            <label >Semister: 1</label>
                            <input type="number" value="{{$department_id}}" name="dep_id" hidden >
                            <input type="number" class="form-control" placeholder="Ammount" name="p1" @isset($sem1)
                                value='{{$sem1->amount}}'
                            @endisset>
                          </div>
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary" name="sem1" value="1">Update</button>
                          </div>
                      </div>
                    </form>
                    <form role="form" method="post" action="{{route('tutionStore')}}">
                      <div class="box-body">

                          @csrf
                          @method('PUT')

                          <div class="form-group">
                            <label >Semister: 2</label>
                            <input type="number" value="{{$department_id}}" name="dep_id" hidden >
                            <input type="number" class="form-control" placeholder="Ammount" name="p2" @isset($sem1)
                                value='{{$sem2->amount}}'
                            @endisset>
                          </div>
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary" name="sem2" value="1">Update</button>
                          </div>
                      </div>
                    </form>
                    <form role="form" method="post" action="{{route('tutionStore')}}">
                      <div class="box-body">

                          @csrf
                          @method('PUT')

                          <div class="form-group">
                            <label >Semister: 3</label>
                            <input type="number" value="{{$department_id}}" name="dep_id" hidden >
                            <input type="number" class="form-control" placeholder="Ammount" name="p3" @isset($sem1)
                                value='{{$sem3->amount}}'
                            @endisset>
                          </div>
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary" name="sem3" value="1">Update</button>
                          </div>
                      </div>
                    </form>
                    <form role="form" method="post" action="{{route('tutionStore')}}">
                      <div class="box-body">

                          @csrf
                          @method('PUT')

                          <div class="form-group">
                            <label >Semister: 4</label>
                            <input type="number" value="{{$department_id}}" name="dep_id" hidden >
                            <input type="number" class="form-control" placeholder="Ammount" name="p4" @isset($sem1)
                                value='{{$sem4->amount}}'
                            @endisset>
                          </div>
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary" name="sem4" value="1">Update</button>
                          </div>
                      </div>
                    </form>
                    <form role="form" method="post" action="{{route('tutionStore')}}">
                      <div class="box-body">

                          @csrf
                          @method('PUT')

                          <div class="form-group">
                            <label >Semister: 5</label>
                            <input type="number" value="{{$department_id}}" name="dep_id" hidden >
                            <input type="number" class="form-control" placeholder="Ammount" name="p5" @isset($sem1)
                                value='{{$sem5->amount}}'
                            @endisset>
                          </div>
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary" name="sem5" value="1">Update</button>
                          </div>
                      </div>
                    </form>
                    <form role="form" method="post" action="{{route('tutionStore')}}">
                      <div class="box-body">

                          @csrf
                          @method('PUT')

                          <div class="form-group">
                            <label >Semister: 6</label>
                            <input type="number" value="{{$department_id}}" name="dep_id" hidden >
                            <input type="number" class="form-control" placeholder="Ammount" name="p6" @isset($sem1)
                                value='{{$sem6->amount}}'
                            @endisset>
                          </div>
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary" name="sem6" value="1">Update</button>
                          </div>
                      </div>
                    </form>
                    <form role="form" method="post" action="{{route('tutionStore')}}">
                      <div class="box-body">

                          @csrf
                          @method('PUT')

                          <div class="form-group">
                            <label >Semister: 7</label>
                            <input type="number" value="{{$department_id}}" name="dep_id" hidden >
                            <input type="number" class="form-control" placeholder="Ammount" name="p7" @isset($sem1)
                                value='{{$sem7->amount}}'
                            @endisset>
                          </div>
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary" name="sem7" value="1">Update</button>
                          </div>
                      </div>
                    </form>
                    <form role="form" method="post" action="{{route('tutionStore')}}">
                      <div class="box-body">

                          @csrf
                          @method('PUT')

                          <div class="form-group">
                            <label >Semister: 8</label>
                            <input type="number" value="{{$department_id}}" name="dep_id" hidden >
                            <input type="number" class="form-control" placeholder="Ammount" name="p8" @isset($sem1)
                                value='{{$sem8->amount}}'
                            @endisset>
                          </div>
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary" name="sem8" value="1">Update</button>
                          </div>
                      </div>
                    </form>
                    
                   

          @endisset

        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>


@endsection