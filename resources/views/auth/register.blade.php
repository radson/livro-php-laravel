@extends('auth.authbase')

@section('title', 'Login')

@section('content')
<div class="col-md-6">
    <h3 class="text-center">Registrar</h3>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name" placeholder="Nome" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" name="password" placeholder="Senha" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirme a Senha:</label>
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirme a Senha" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Registrar</button>
    </form>
</div>
@stop