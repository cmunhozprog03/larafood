@extends('adminlte::page')

@section('title', "Editar o plano {$plan->name}")

@section('content_header')
    <h1>Editar o plano: {{ $plan->name }} </h1>
@stop

@section('content')

  <div class="row justify-content-center">
    <div class="col-8 shadow">
      <div class="card">
        
        <div class="card-body bg-secondary">
          <form action="{{ route('plans.update', $plan->url) }}" class="form" method="POST">
            @csrf
            @method('PUT')
    
            @include('admin.pages.plans._partials.form')
    
    
          </form>
        </div>
      </div>
    </div>
  </div>
  


@stop