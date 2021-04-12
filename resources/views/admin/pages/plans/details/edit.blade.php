@extends('adminlte::page')

@section('title', 'Editar detalhe do plano: {$detail->name}')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"></a>Dashboard</li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('details.plan.index', $plan->url) }}">Detalhes</a></li>
        <li class="breadcrumb-item"><a href="{{ route('details.plan.edit', [$plan->url, $detail->id]) }}" class="active">Editar</a></li>
    </ol>
    <div class="row justify-content-md-between">
        <h1>Editar detalhe do plano:{{  $detail->name }}} </h1>

    </div>


@stop

@section('content')
    <div class="card">
      <div class="card-body">
        <form action="{{ route('details.plan.update', [$plan->url, $detail->id]) }}" method="POST">
          @method('PUT')
          @include('admin.pages.plans.details._partials.form')
        </form>
      </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
@stop
