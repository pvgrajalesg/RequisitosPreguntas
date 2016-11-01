@extends('analyst/home')    <!-- resources/views/auth/login.blade.php -->
@section('contenido')
<main id="component" class="detalle">
  <div class="breadcrumb-class">You are in:<a href="/" target="_self" title="Inicio">Home</a>/<a href="/certification/" target="_self" title="Certification">Certification</a>/<span>Answer Question</span></div>
  <div class="spacer"></div>
  <h1>Answer Question</h1><br><br>
  <div class="row">
      <p aling="center" size=20> Multiple-choice questions with single or multiple answers</p><br><br>
      ¿Cuál de los siguientes no es un comentario válido?: <br><br>
      <form id="register_form" role="form" method="post" enctype="multipart/form-data">
        <input type="checkbox" name="respuesta" value="a"> a) /** comentario */ <br>
        <input type="checkbox" name="respuesta" value="b"> b) /* comentario */ <br>
        <input type="checkbox" name="respuesta" value="c"> c) /* comentario <br>
        <input type="checkbox" name="respuesta" value="d"> d) // comentario <br><br>
        <div class="row">
          <div class="col-md-12">
            <p style="text-align: center;">                    
              <a class="btn btn-primary btn-md" href="/certification/">Answer</a></button>
            </p>
          </div>
        </div> 
        <div class="row">
          <div class="col-md-12">
            <p style="text-align: right;">        
              <a class="btn btn-primary btn-md" href="/modelproject/" >Return</a>         
              <a class="btn btn-primary btn-md" href="/modelproject/" id=next>Next</a>
              <script type="text/javascript">
                document.getElementById('next').onclick=function(){ 
                  return false
                }
              </script>
              <script type="text/javascript">
                function correcto(){
                  return "Respuesta correcta"
                }
              </script>
              
            </p>
          </div>
        </div>   
      </form>
  </div>
</main>
@endsection
