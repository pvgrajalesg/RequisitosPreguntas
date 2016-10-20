@extends('plantilla')    <!-- resources/views/auth/login.blade.php -->
@section('titulo')
Login
@endsection
@section('contenido')
<main id="component" class="wrapper">
    <style>
        .wrapper{
            background:url('/images/fondo_Intranet.jpg') no-repeat center center !important;
            background-size: cover;
        }
        .login{
            max-width: 450px;
            margin: 0 auto;
        }

        .well{
            border: none;
            border-radius: 0;
            background-color: rgba(250,250,250,0.7);
        }
    </style>
    <div class="spacer"></div>
    <div class="login">
        <form action="/auth/login" method="post" class=" well">
            {!! csrf_field() !!}
            <div class="form-group">
                <label>Account *</label>
                <input type="text" name="account" id="account" value="{{ old('account') }}" class="form-control" size="25" autofocus="" required="">
            </div>
            <div class="form-group">
                <label>Password *</label>
                <input type="password" name="password" id="password" value="" class="form-control" size="25" maxlength="99" required="">
            </div>
            <div class="form-group">
                {{$errors->has('account') ? $errors->first('account'): ''}}
                <button type="submit" class="form-control btn btn-primary">Login</button>
            </div>
            <div class="form-group">
                <a href="/password/email">Forgot Password?</a>
            </div>
        </form>
    </div>
</main>
@endsection
