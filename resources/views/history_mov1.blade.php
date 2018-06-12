@extends('layouts.admin')

@section('content')
<meta http-equiv="refresh" content="3">
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Alarmes Sensor Movimento 1</h3>
</div>
  <!-- /.card-header -->
    <div class="content">
        <div class="form-group">
          <div class="row">
            <div class="col-md-5 col-md-offset-3">

                <div class="panel panel-default">


                    @if (count($mov1_alarms))
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>value</th>
                                <th>created at</th>


                            </tr>
                        </thead>
                        @foreach ($mov1_alarms as $mov1_alarm)
                        <tr>
                            <td>{{$mov1_alarm->id}}</td>
                            <td>{{$mov1_alarm->value}}</td>
                            <td>{{$mov1_alarm->created_at}}</td>



                        @endforeach

                    </table>
                    <div class="text-center">

                    </div>

                    @else

                    <h2>No requests found</h2>
                    @endif
                </div>
            </div>
          </div>
        </div>
    </div>

  <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection
