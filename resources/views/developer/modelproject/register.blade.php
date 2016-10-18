@extends('analyst/home')    <!-- resources/views/auth/login.blade.php -->
@section('contenido')
<main id="component" class="detalle">
  <div class="breadcrumb-class">You are in:<a href="/" target="_self" title="Inicio">Home</a>/<a href="/modelproject/" target="_self" title="Project Managers">Model Project</a>/<span>Answer Question</span></div>
  <div class="spacer"></div>
  <h1>Answer Question</h1><br><br>
  <div class="row">
      Some kinds of UML diagrams are: <br><br>
      <form id="register_form" role="form" method="post" enctype="multipart/form-data">
        <input type="checkbox" name="respuesta" value="a" checked> a) Goal Diagram<br>
        <input type="checkbox" name="respuesta" value="b"> b) Class Diagram<br>
        <input type="checkbox" name="respuesta" value="c"> c) Process Diagram<br>
        <input type="checkbox" name="respuesta" value="d"> d) State Machine Diagram<br><br>
        <div class="row">
          <div class="col-md-12">
            <p style="text-align: center;">                    
              <a class="btn btn-primary btn-md" href="/modelproject/">Answer</a></button>
            </p>
          </div>
        </div>  
      </form>
  </div>
</main>
@endsection
