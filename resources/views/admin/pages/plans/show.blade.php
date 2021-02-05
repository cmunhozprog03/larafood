@extends('adminlte::page')

@section('title', 'Plano')

@section('content_header')
    <h1>Detalhes do Plano: <b>{{ $plan->name }}</b> </h1>

@stop

@section('content')

  <div class="row justify-content-center">
    <div class="col-8">
      <div class="card">
        <div class="header">
          <h5>Plano: {{ $plan->name }}</h5>  
        </div>
        <div class="body">
          <p class="lead">Descrição: {{ $plan->description }}</p>
          <p class="lead">Valor: {{ $plan->price }}</p>
        </div>
        <div class="footer">
          
        </div>
      </div>
    </div>

@stop