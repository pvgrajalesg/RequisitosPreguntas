@extends('admin/home')    <!-- resources/views/auth/login.blade.php -->
@section('contenido')
<main id="component" class="detalle">
  <div class="breadcrumb-class">You are in:<a href="/" target="_self" title="Inicio">Home</a>/<a href="/companies/" target="_self" title="Companies">Companies</a>/<span>{{ $company->name }}</span></div>
  <div class="spacer"></div>
  <h1>Company {{ $company->name }}</h1>
  <div class="row">
      <form id="update_form" role="form" method="post" action="/companies/update/{{ $company->id }}" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="form-group col-md-6">
          {!! Form::label('Name* '.($errors->has('name')? $errors->first('name'):'')) !!}
          {!! Form::text('name', $company->name , array('class' => 'form-control', 'required' => '')) !!}
        </div>
          <div class="form-group col-md-4 col-md-offset-8">
            <input class="btn btn-primary form-control" type="submit" value="Save"/>
          </div>
      </form>
  </div>
</main>
@endsection
