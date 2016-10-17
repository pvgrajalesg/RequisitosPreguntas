@extends('admin/home')    <!-- resources/views/auth/login.blade.php -->
@section('contenido')
<script src="/js/jquery.dataTables.min.js" type="text/javascript"></script>
<main id="component" class="detalle">
  <div class="breadcrumb-class">You are in:<a href="/" target="_self" title="Inicio">Home</a>/<span>Certification</span></div>
  <div class="spacer"></div>
<h1>Certification</h1><br>
<div class="dataTables_wrapper" role="grid">
    <table class="table" id="tabla-certification">
      <thead>
        <tr>
          <th>Level competence analyst</th><th>Level competence certification</th><th>Analyst question amount</th><th>Amount question correct certification</th><th>Bidding capacity company</th>
        </tr>
      </thead>
      <tbody>
          <tr>
          	<td>1</td>
          	<td>2</td>
          	<td>10</td>
          	<td>3</td>
          	<td>35</td>
          </tr>
      </tbody>
    </table>
</div>
	<div>

        <table class="table" id="tabla-analyst-certification">
            <tbody>
                <tr>
                    <th><div class="row">
                            <div class="col-md-12">
                                <p style="text-align: right;">
                                    <a class="btn btn-primary btn-md" href="/companies/register">Answer question</a></button>
                                </p>
                            </div>
                        </div>
                    </th>
                    <th><div class="row">
                            <div class="col-md-12">
                                <p style="text-align: left;">
                                    <a class="btn btn-primary btn-md" href="/companies/update">Request resources</a></button>
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
