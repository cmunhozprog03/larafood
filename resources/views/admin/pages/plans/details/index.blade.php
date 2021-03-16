@extends('adminlte::page')

@section('title', 'Detalhes do plano: {$plan->name}')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"></a>Dashboard</li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('details.plan.index', $plan->url) }}" class="active">Detalhes</a></li>
    </ol>
    <div class="row justify-content-md-between">
        <h1>Detalhes do palno: {{ $plan->name }} &nbsp;&nbsp; <a href="{{ route('plans.create') }}" class="btn btn-dark"><i class="fa fa-plus-square"></i>&nbsp; ADD</a></h1>
        
    </div>
    
   
@stop

@section('content')
    <div class="card">
        
        <div class="card-body">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th width="250">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($details as $detail)
                        <tr>
                            <td>{{ $detail->name }}</td>
                            
                            <td>
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
                {{ $details->appends($filters)->links() }}
            @else  
                {{ $details->links() }}
            @endif
            
        </div>

    </div>
@stop



