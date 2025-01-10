@extends('layouts.base')

@section('title', 'Cadastro de Produtos')

@section('content')
<h1>Novo produto</h1>

 <!-- Exibe mensagens de erro -->
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/produtos/adiciona" method="post">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />  
    <div class="form-group">
        <label>Nome</label>
        <input name="nome" class="form-control"  value="{{ old('nome') }}" />
    </div>
    <div class="form-group">
        <label>Descrição</label>
        <input name="descricao" class="form-control"  value="{{ old('descricao') }}" />
    </div>
    <div class="form-group">
        <label>Valor</label>
        <input name="valor" class="form-control "  value="{{ old('valor') }}"/>
    </div>
    <div class="form-group">
        <label>Quantidade</label>
        <input name="quantidade" class="form-control" type="number"  value="{{ old('quantidade') }}"/>
    </div>
    <button class="btn btn-primary btn-block">Salvar</button>

</form>

@stop