@extends('admin/home')    <!-- resources/views/auth/login.blade.php -->
@section('contenido')
<main id="component" class="detalle">
  <div class="breadcrumb-class">You are in:<a href="/" target="_self" title="Inicio">Home</a>/<a href="/project-managers/" target="_self" title="Project Managers">Project Managers</a>/<span>{{ $project_manager->user->account }}</span></div>
  <div class="spacer"></div>
  <h1>Project Manager {{ $project_manager->user->name }}</h1>
  <div class="row">
      <form id="update_form" role="form" method="post" action="/project-managers/update/{{ $project_manager->id }}" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="form-group col-md-4">
          {!! Form::label('Code* '.($errors->has('code')? $errors->first('code'):'')) !!}
          {!! Form::text('code',  $project_manager->user->code , array('class' => 'form-control', 'required' => '')) !!}
        </div>
        <div class="form-group col-md-4">
          {!! Form::label('Name* '.($errors->has('name')? $errors->first('name'):'')) !!}
          {!! Form::text('name',  $project_manager->user->name , array('class' => 'form-control', 'required' => '')) !!}
        </div>
        <div class="form-group col-md-4">
          {!! Form::label('Email* '.($errors->has('email')? $errors->first('email'):'')) !!}
          {!! Form::text('email',  $project_manager->user->email , array('class' => 'form-control', 'required' => '')) !!}
        </div>
        <br />* Fields are required.
        <div class="row form-group col-md-4 col-md-offset-8">
          <input class="btn btn-primary form-control" type="submit" value="Update"/>
        </div>
      </form>
  </div>
</main>
@endsection
