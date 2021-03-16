@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"></a>Dashboard</li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}" class="active">Planos</a></li>
    </ol>
    <div class="row justify-content-md-between">
        <h1>Planos &nbsp;&nbsp; <a href="{{ route('plans.create') }}" class="btn btn-dark"><i class="fa fa-plus-square"></i>&nbsp; ADD</a></h1>
        <form action="{{ route('plans.search') }}" class="form form-inline" method="POST">
            @csrf
            <input type="text" name="filter" placeholder="Nome" 
                class="form-control" value="{{ $filters['filter'] ?? '' }}">
            <button type="submit" class="btn btn-dark">Buscar</button>
        </form>
    </div>
    
   
@stop

@section('content')
    <div class="card">
        
        <div class="card-body">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th width="300">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($plans as $plan)
                        <tr>
                            <td>{{ $plan->name }}</td>
                            <td>{{ number_format($plan->price, 2, ',', '.') }}</td>
                            <td>
                              <a href="{{ route('details.plan.index', $plan->url) }}" class="btn btn-primary">DETALHES</a>
                              <a href="{{ route('plans.edit', $plan->url) }}" class="btn btn-info">EDITAR</a>
                              <a href="{{ route('plans.show', $plan->url) }}" class="btn btn-warning">VER</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {{ $plans->appends($filters)->links() }}
            @else  
                {{ $plans->links() }}
            @endif
            
        </div>

    </div>
@stop



