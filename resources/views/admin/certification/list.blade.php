@extends('admin/home')    <!-- resources/views/auth/login.blade.php -->
@section('contenido')
<script src="/js/jquery.dataTables.min.js" type="text/javascript"></script>
<main id="component" class="detalle">
  <div class="breadcrumb-class">You are in:<a href="/" target="_self" title="Inicio">Home</a>/<span>Certification</span></div>
  <div class="spacer"></div>
<h1>Certification</h1>
<div class="row">
  <div class="col-md-12">
    <p style="text-align: center;">
      <a class="btn btn-primary btn-md" href="/companies/register/">Answer question</a>
    </p>
  </div>
</div>

</main>
@endsection
