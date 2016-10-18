@extends('analyst/home')    <!-- resources/views/auth/login.blade.php -->
@section('contenido')
<script src="/js/jquery.dataTables.min.js" type="text/javascript"></script>
<main id="component" class="detalle">
  <div class="breadcrumb-class">You are in:<a href="/" target="_self" title="Inicio">Home</a>/<span>Model Project</span></div>
  <div class="spacer"></div>
<h1>Model Project</h1><br>
<div class="dataTables_wrapper" role="grid">
    <table class="table" id="tabla-model-project">
      <thead>
        <tr>
          <th>Name</th><th>Description</th><th>K_assigned</th><th>Analyst question amount</th><th>Amount question correct</th><th>Resource company</th>
        </tr>
      </thead>
      <tbody>
          <tr>
          	<td>Papeleria Don Juan</td>
          	<td>Se pretente realizar un sistema de inventario que permita la administración de la papeleria</td>
          	<td>20</td>
          	<td>5</td>
          	<td>0</td>
          	<td>35</td>
          </tr>
      </tbody>
    </table>
</div>
<div>
    <table class="table" id="tabla-analyst-model-project">
        <tbody>
            <tr>
                <th><div class="row">
                    	<div class="col-md-12">
                        	<p style="text-align: right;">
                                <a class="btn btn-primary btn-md" href="/modelproject/register">Answer question</a></button>
                            </p>
                        </div>
                    </div>
                </th>
                <th><div class="row">
                        <div class="col-md-12">
                            <p style="text-align: left;">
                                <a class="btn btn-primary btn-md" href="/modelproject/update">Request resources</a></button>
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

