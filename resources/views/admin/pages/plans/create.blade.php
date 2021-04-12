@extends('adminlte::page')

@section('title', 'Cadastrar Novo Plano')

@section('content_header')
    <h1>Cadastrar Novo Plano </h1>
@stop

@section('content')

  <div class="row justify-content-center">
    <div class="col-8 shadow-lg">
      <div class="card">
        <div class="card-body bg-secondary">
          <form action="{{ route('plans.store') }}" class="form" method="POST">
            @csrf

            @include('admin.pages.plans._partials.form')


          </form>
        </div>
      </div>
    </div>
  </div>



@stop
@section('css')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
@stop
