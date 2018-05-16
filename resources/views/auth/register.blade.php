<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IoT Security | Registration </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/iCheck/square/blue.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="/"><b>IoT</b>Security</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">{{ __('Register') }}</p>
      <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="form-group has-feedback">
          <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">
          @if ($errors->has('name'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
          <span class="fa fa-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email">
          @if ($errors->has('email'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
          <span class="fa fa-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
          @if ($errors->has('password'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
          <span class="fa fa-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Retype password">
          <span class="fa fa-lock form-control-feedback"></span>
        </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Register') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
