@extends('admin/home')    <!-- resources/views/auth/login.blade.php -->
@section('contenido')
<main id="component" class="detalle">
  <div class="breadcrumb-class">You are in:<a href="/" target="_self" title="Inicio">Home</a>/<a href="/companies/" target="_self" title="Company">Certification</a>/<span>Answer Question</span></div>
  <div class="spacer"></div>
  <h1>Answer Question</h1>
  <div class="row">
       ¿Cual es mi color favorito? <br><br>
      <form id="register_form" role="form" method="post" action="/companies/register/" enctype="multipart/form-data">
        <input type="checkbox" name="respuesta" value="azul" checked> Azul<br>
        <input type="checkbox" name="respuesta" value="amarillo"> Amarillo<br>
        <input type="checkbox" name="respuesta" value="rojo"> Rojo<br><br>
        <div class="row">
          <div class="col-md-12">
            <p style="text-align: center;">                    
              <a class="btn btn-primary btn-md" href="/companies">Answer</a></button>
            </p>
          </div>
        </div>  
      </form>
  </div>
</main>
@endsection
