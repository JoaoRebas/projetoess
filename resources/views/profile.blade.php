@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0 text-dark text-center" style="font-size:50px; font-weight:bold; height:100px">{{ $user->name }}'s Profile</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="row">
      <!-- left column -->
      <div class="col-md-4 offset-md-4">
        <div class="text-center">
          <img src="/uploads/avatars/{{ $user->avatar }}" style="width:100px; height:100px; float:center; border-radius:50%;">
        <form action="{{route('update', Auth::user()->id)}}" method="post" class="form-group" enctype="multipart/form-data">
          @csrf
          {{ method_field('patch') }}
          <div class="col-md-6 offset-md-3">
              <input type="file" class="form-control-file{{ $errors->has('image') ? ' is-invalid' : '' }}" name="avatar">
          </div>
        </div>
      </div>

      <!-- edit form column -->
      <div class="col-md-6 personal-info offset-md-3">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a>
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        <h3>Personal info</h3>

          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-12">
              <input class="form-control" value="{{Auth::user()->name}}" type="text" name="name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-12">
              <input class="form-control" value="{{Auth::user()->email}}" type="email" name="email" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-12">
              <input class="form-control" type="password" name="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-12">
              <input class="form-control" type="password" name="password_confirmation">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input class="btn btn-primary" value="Save Changes" type="submit">
              <span></span>
              <input class="btn btn-default" value="Cancel" type="reset">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>

@endsection
