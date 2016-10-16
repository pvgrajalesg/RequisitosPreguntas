@extends('admin/home')    <!-- resources/views/auth/login.blade.php -->
@section('contenido')
<main id="component" class="detalle">
  <div class="breadcrumb-class">You are in:<a href="/" target="_self" title="Inicio">Home</a>/<a href="/project-managers/" target="_self" title="Project Managers">Model Project</a>/<span>Answer Question</span></div>
  <div class="spacer"></div>
  <h1>Answer Question</h1><br><br>
  <div class="row">
       ¿Cual es mi color favorito? <br><br>
      <form id="register_form" role="form" method="post" enctype="multipart/form-data">
        <input type="checkbox" name="respuesta" value="azul" checked> Azul<br>
        <input type="checkbox" name="respuesta" value="amarillo"> Amarillo<br>
        <input type="checkbox" name="respuesta" value="rojo"> Rojo<br><br>
        <div class="row">
          <div class="col-md-12">
            <p style="text-align: center;">                    
              <a class="btn btn-primary btn-md" href="/project-managers/">Answer</a></button>
            </p>
          </div>
        </div>  
      </form>
  </div>
</main>
@endsection
