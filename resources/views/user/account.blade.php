@extends('plantilla')
@section('contenido')
<main id="component" class="detalle">
  <div class="breadcrumb-class">You are in:<a href="/" target="_self" title="Inicio">Home</a>/<span>My account</span></div>
  <div class="spacer"></div>
  <h1>Hi, {{ $user->name }}</h1>
  <div class="row">
      <form id="update_form" role="form" method="post" action="/my-account/" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="form-group col-md-4">
          {!! Form::label('Code') !!}
          {!! Form::text('code',  $user->code , array('class' => 'form-control','disabled'=>'')) !!}
        </div>
        <div class="form-group col-md-4">
          {!! Form::label('Name') !!}
          {!! Form::text('name',  $user->name , array('class' => 'form-control', 'required'=>'')) !!}
        </div>
        <div class="form-group col-md-4">
          {!! Form::label('Email*') !!}
          {!! Form::text('email',  $user->email , array('class' => 'form-control', 'required'=>'')) !!}
        </div>
        <div class="form-group col-md-4">
          {!! Form::label('Account') !!}
          {!! Form::text('account',  $user->account , array('class' => 'form-control', 'disabled'=>'')) !!}
        </div>
        <div class="form-group col-md-4">
          {!! Form::label('Password* '.($errors->has('password')? $errors->first('password'):'')) !!}
          {!! Form::password('password', array('placeholder' => ($errors->has('password')? $errors->first('password'):''), 'class' => 'form-control', 'required' => '')) !!}
        </div>
        <div class="form-group col-md-4">
          {!! Form::label('Confirm Password* '.($errors->has('password_confirmation')? $errors->first('password_confirmation'):'')) !!}
          {!! Form::password('password_confirmation', array('placeholder' => ($errors->has('password_confirmation')? $errors->first('password_confirmation'):''),'class' => 'form-control', 'required' => '')) !!}
        </div>
        <br />* Fields are required.
        <div class="row form-group col-md-4 col-md-offset-8">
          <input class="btn btn-primary form-control" type="submit" value="Update"/>
        </div>
      </form>
  </div>
</main>
@endsection
