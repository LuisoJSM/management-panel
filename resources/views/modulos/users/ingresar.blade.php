@extends('welcome')

@section('ingresar')

<style type="text/css">

    .login-page,
    .register-page {
        background: linear-gradient(rgba(0,0,0,1), rgba(0,30,50,1));
    }

        .login-page #back {

            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: url(storage/plantilla/back.png);
            background-size: cover;
            overflow: hidden;
            z-index: -1;


        }
  

</style>

<div id="back"></div>

<div class="login-box">
    <div class="login-logo">
        <img src="{{ url('storage/plantilla/logo-blanco-bloque.png') }}" alt="" class="img-responsive" 
        style="padding: 30px 100px 0px 100px">

    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Ingresar al sistema</p>
  

      {{-- LLAMADA AL MÉTODO LOGIN --}}

      <form action="{{ route('login') }}" method="post">
        @csrf

        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" name="email" required>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Contraseña" name="password" required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>

            @error('email')
                <br>
                <div class="alert alert-danger text-center">Error al intorducir email o contraseña</div>
            @enderror


        </div>
        <div class="row">
          <div class="col-xs-8">
             {{-- ESTE SERÍA EL CHECKBOX DE RECORDAR USUARIO --}}
            {{-- <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div> --}}
          </div>
          <!-- /.col -->
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
  
      {{-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
          Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
          Google+</a>
      </div>
      <!-- /.social-auth-links -->
  
      <a href="#">I forgot my password</a><br>
      <a href="register.html" class="text-center">Register a new membership</a>
   --}}
    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

@endsection