@extends('layouts.admin')

@section('content')
<meta http-equiv="refresh" content="3">
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Alarmes  Sensor Movimento 2</h3>
</div>
  <!-- /.card-header -->
    <div class="content">
        <div class="form-group">
          <div class="row">
            <div class="col-md-5 col-md-offset-3">

                <div class="panel panel-default">


                    @if (count($mov2_alarms))
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>value</th>
                                <th>created at</th>


                            </tr>
                        </thead>
                        @foreach ($mov2_alarms as $mov2_alarm)
                        <tr>
                            <td>{{$mov2_alarm->id}}</td>
                            <td>{{$mov2_alarm->value}}</td>
                            <td>{{$mov2_alarm->created_at}}</td>

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
