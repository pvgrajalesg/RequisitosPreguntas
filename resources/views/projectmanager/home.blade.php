@extends('plantilla')    <!-- resources/views/auth/login.blade.php -->
@section('titulo')
Project Manager
@endsection
@section('menu')
<div class="btn-group">
    <!-- INGRESE AQUI EL MENU QUE TINE UN PROJECT MANAGER, SIGUIENDO LOS LINEAMIENTOS DE LA PLANTILLA -->
</div>

@endsection
@section('contenido')
<main id="component" class="detalle">
    <div class="breadcrumb-class">You are in:<a href="/" target="_self" title="Inicio">Home</a></div>
    <div id="system-message-container">
        <div class="alert alert-message">
        	<h4 class="alert-heading">Welcome {{ $user->account }}</h4>
            <div>
               <div class="alert-message">¿What do you want to do?</div>
        	</div>
        </div>
    </div>
</main>
@endsection
