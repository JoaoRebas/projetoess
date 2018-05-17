@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark text-center" style="font-size:50px; font-weight:bold; height:100px">Sensors</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-12">
        <!-- small box -->
        <div class="small-box bg-success" style="height:150px">
          <div class="inner">
            <h3>Alarm State</h3>
            <p>Disarmed</p>
          </div>
          <div class="icon">
            <i class="ion ion-home"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>Movement Sensor 1</h3>
            <div class="text-left" style="font-size: 100px">
              <p>No Move Detected</p>
            </div>
          </div>
          <div class="icon">
            <i class="ion ion-speedometer"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>Movement Sensor 2</h3>
            <p>No Move Detected</p>
          </div>
          <div class="icon">
            <i class="ion ion-speedometer"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>Flame Sensor</h3>
            <p>No Flame Detected</p>
          </div>
          <div class="icon">
            <i class="ion ion-flame"></i>
          </div>

        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>Gas Sensor</h3>
            <p>No Gas Detected</p>
          </div>
          <div class="icon">
            <i class="ion ion-warning"></i>
          </div>

        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>RF</h3>
            <p>Alarm State:</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
