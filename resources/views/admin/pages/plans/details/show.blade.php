@extends('adminlte::page')

@section('title', 'Detalhes do do plano: {$detail->name}')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"></a>Dashboard</li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('details.plan.index', $plan->url) }}">Detalhes</a></li>
        <li class="breadcrumb-item"><a href="{{ route('details.plan.show', [$plan->url, $detail->id]) }}" class="active">Destalhes</a></li>
    </ol>
    


@stop

@section('content')
<div class="row justify-content-center">
  <div class="col-8">
    <div class="card">
      <div class="header">
        <h5>Detalhes do Plano: {{ $plan->name }}</h5>
      </div>
      <div class="body">
        <ul>
          <li><strong>Nome: </strong>{{ $detail->name }}</li>
        </ul>
      </div>
      <div class="footer">
        <form action="{{ route('details.plan.destroy', [$plan->url, $detail->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger my-2"><i class="fa fa-trash"></i>&nbsp; Deletar o Detalhe {{ $detail->name }}, do pLano {{ $plan->name }}?</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
@stop
