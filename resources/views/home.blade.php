@extends('layouts.admin')

@section('content')
<!-- <meta http-equiv="refresh" content="5"> 	Refresh automático -->
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
            <h3 style="color:black">Alarm State</h3>
            <p style="font-size:30px; color:black">

            </p>
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
            <h3 style="color:black">Movement Sensor 1</h3>
              <p style="font-size:30px; color:black">
                <?php
          				$file = "files/movement_sensor_one_movementone_valor.txt";
          				if (file_exists($file))
          					echo(file_get_contents($file));
          				else
          					echo("(error: could not obtain data!)");
          			?>
              </p>
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
            <h3 style="color:black">Movement Sensor 2</h3>
            <p style="font-size:30px; color:black">
              <?php
                $file = "files/movement_sensor_two_movementtwo_valor.txt";
                if (file_exists($file))
                  echo(file_get_contents($file));
                else
                  echo("(error: could not obtain data!)");
              ?>
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-speedometer"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3 style="color:black">Flame Sensor</h3>
            <p style="font-size:30px; color:black">

            </p>
          </div>
          <div class="icon">
            <i class="ion ion-flame"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3 style="color:black">Gas Sensor</h3>
            <p style="font-size:30px; color:black">

            </p>
          </div>
          <div class="icon">
            <i class="ion ion-cloud"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
<<<<<<< HEAD
=======
      <div class="col-12">
        <!-- small box -->
        <div class="small-box bg-important">
          <div class="inner">
            <h3 style="color:black">RFID Sensor:</h3>
            <p style="font-size:30px; color:black">

            </p>
          </div>
          <div class="icon">
            <i class="ion ion-card"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
>>>>>>> 0ced999f30deb9dbea6616852d9ba9da28456333
    </div>
    <!-- /.row -->
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
