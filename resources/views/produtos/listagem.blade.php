@extends('layouts.base')

@section('title', 'Listagem de Produtos')

@section('content')
<h1>Listagem de produtos</h1>
@if (empty($produtos))
    <div class="alert alert-danger">Nenhum produto cadastrado.</div>
@else
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th colspan="3">Ações</th>
        </tr>
        @foreach ($produtos as $p)
            <tr class="{{ $p->quantidade <= 1 ? 'danger' : ''}}">
                <td>{{ $p->nome }}</td>
                <td>{{ $p->valor }}</td>
                <td>{{ $p->descricao }}</td>
                <td>{{ $p->quantidade }}</td>
                <td>
                    <a href="{{route('produtos.mostra', [$p->id])}}">
                        <span class="glyphicon  glyphicon-search"></span>
                    </a>
                </td>
                <td>
                    <a href="{{route('produtos.altera', [$p->id])}}">
                        <span class="glyphicon  glyphicon-edit"></span>
                    </a>
                </td>
                <td>
                    <a href="{{ route('produtos.remove', [$p->id]) }}">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endif
<h4><span class="label label-danger pull-right">Um ou menos itens no estoque</span></h4>
@if(old('nome'))
    <div class="alert  alert-success">
        <strong>Sucesso!</strong> Produto [{{ old('nome')}}] adicionado com sucesso.
    </div>
@endif
@stop

