@extends('plantilla')    <!-- resources/views/auth/login.blade.php -->
@section('titulo')
Forgot Password
@endsection
@section('styles')
<link rel="stylesheet" type="text/css" href="/css/login.css" media="all">
@endsection
@section('contenido')
<main id="component" class="wrapper">
    <style>
        .wrapper{
            background:url('/images/fondo_Intranet.jpg') no-repeat center center !important;
            background-size: cover;
        }

        .center{
            margin: 0 auto;
            text-align: center;
            display:block;
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
    <div class="push"></div>
    <div id="system-message-container">
        <!--{ $errors }-->
    </div>
    <div class="login login">
        <form class="form-validate form-horizontal well" role="form" method="POST" action="/password/email">
            <fieldset>
                {!! csrf_field() !!}
                @if (count($errors) > 0)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <div class="col-md-4 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                                 Send Password Reset Link
                        </button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="clear"></div>
</main>
@endsection
