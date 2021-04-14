@extends('adminlte::page')

@section('title', 'Cadastrar Novo Perfil')

@section('content_header')
    <h1>Cadastrar Novo Perfl </h1>
@stop

@section('content')

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="w3-card-4">
          <header class="w3-dark-gray py-1">
              <h3 class="ml-1">Cadatro de Novo Perfil</h3>
          </header>

          {!! Form::open(['route' => 'formteste.store']) !!}
          <div class="w3-contaniner mx-2">
              

                  {!! Form::label('name', 'Nome:') !!}
                  {!! Form::text('name', null, ['class' => 'w3-input w3-border-indigo mb-1']) !!}


                  {!! Form::label('Description', 'Descrição:') !!}
                  {!! Form::text('description', null, ['class' => 'w3-input w3-border-indigo mb-1']) !!}

                  <div class="row justify-content-around">
                    <a href="{{ route('formteste.index') }}" class="btn btn-outline-dark my-2">Cancelar</a>
                    {!! Form::submit('Salvar', ['class' => 'btn btn-dark my-2']) !!}
                  </div>
                  
             
              {!! Form::close() !!}
          </div>
      </div>
    </div>
  </div>
        


    @stop
    @section('css')
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
    @stop
