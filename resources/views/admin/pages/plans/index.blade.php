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
    <div class="w3-card-4">

        <div class="card-body">
            <table class="table table-hover table-striped">
                <thead class="w3-dark-gray">
                    <tr class="w3-center">
                        <th width="50%">Nome</th>
                        <th width="30%">Preço</th>
                        <th width="20%">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($plans as $plan)
                        <tr class="text-bold">
                            <td>{{ $plan->name }}</td>
                            <td class="w3-center">{{ number_format($plan->price, 2, ',', '.') }}</td>
                            <td class="w3-center">
                              <a href="{{ route('details.plan.index', $plan->url) }}" class="btn btn-info"><i class="fas fa-list-alt"></i></a>
                              <a href="{{ route('plans.edit', $plan->url) }}" class="btn btn-warning" alt="Editar"><i class="fas fa-pen-alt"></i></a>
                              <a href="{{ route('plans.show', $plan->url) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
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

@section('css')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
@stop



