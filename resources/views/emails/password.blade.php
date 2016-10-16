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
        Click here to reset your password: {{ url('password/reset/'.$token) }}
    </div>
    <div class="clear"></div>
</main>
@endsection
