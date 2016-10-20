@extends('plantilla')    <!-- resources/views/auth/login.blade.php -->
@section('titulo')
Tester
@endsection
@section('menu')
@endsection
@section('contenido')
<main id="component" class="detalle">
    <div class="breadcrumb-class">You are in:<a href="/" target="_self" title="Inicio">Home</a></div>
    <div id="system-message-container">
        <div class="alert alert-message">
        	<h4 class="alert-heading">Welcome {{ $user->name }}</h4>
            <div>
               <div class="alert-message">¿What do you want to do?</div>
        	</div>
        </div>
    </div>
    <div>
        <table class="table" id="tabla-analyst">
            <tbody>
                <tr>
                    <th><div class="row">
                            <div class="col-md-12">
                                <p style="text-align: right;">
                                    <a class="btn btn-primary btn-md" href="/modelproject">Model Project</a></button>
                                </p>
                            </div>
                        </div>
                    </th>
                    <th><div class="row">
                            <div class="col-md-12">
                                <p style="text-align: left;">
                                    <a class="btn btn-primary btn-md" href="/certification">Certification</a></button>
                                </p>
                            </div>
                        </div>
                    </th>

                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection
