@extends('analyst/home')    <!-- resources/views/auth/login.blade.php -->
@section('contenido')
<main id="component" class="detalle">
  <div class="breadcrumb-class">You are in:<a href="/" target="_self" title="Inicio">Home</a>/<a href="/modelproject/" target="_self" title="modelproject">Test Project</a>/<span>Request resources</span></div>
  <div class="spacer"></div>
  <h1>Request resources</h1>
    <p align="center"> The resources have been requested to project manager</p>
      <div class="row">
          <div class="col-md-12">
            <p style="text-align: center;">        
              <a class="btn btn-primary btn-md" href="/modelproject/">Return</a>
            </p>
          </div>
      </div>
</main>
@endsection
