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
          <p class="lead">Valor:  {{ number_format($plan->price, 2, ',', '.') }}</p>
        </div>
        <div class="footer">
          <form action="{{ route('plans.destroy', $plan->url) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp; DELETAR O PLANO: {{ $plan->name }}?</button>
          </form>
        </div>
      </div>
    </div>

@stop