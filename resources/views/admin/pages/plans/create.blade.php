@extends('adminlte::page')

@section('title', 'Cadastrar Novo Plano')

@section('content_header')
    <h1>Cadastrar Novo Plano </h1>
@stop

@section('content')

  <div class="row justify-content-center">
    <div class="col-8">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('plans.store') }}" class="form" method="POST">
            @csrf
    
            <div class="form-group">
              <label for="">Nome:</label>
              <input type="text" name="name" id="" class="form-control" placeholder="Nome do Plano">
            </div>
    
            <div class="form-group">
              <label for="">Decrição:</label>
              <input type="text" name="name" id="" class="form-control" placeholder="Descriçao do Plano">
            </div>
    
            <div class="form-group">
              <label for="">Valor:</label>
              <input type="text" name="price" id="" class="form-control" placeholder="Valor do Plano">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-dark">Salvar</button>
            </div>
    
    
          </form>
        </div>
      </div>
    </div>
  </div>
  


@stop