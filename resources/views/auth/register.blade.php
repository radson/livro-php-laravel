@extends('auth.authbase')

@section('title', 'Login')

@section('content')
<div class="card p-4 shadow-lg" style="width: 100%; max-width: 400px;">
    <h2 class="text-center mb-4">Login</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="name" placeholder="Nome" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha:</label>
            <input type="password" class="form-control" name="password" placeholder="Senha" required>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirme a Senha:</label>
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirme a Senha" required>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
        </div>
    </form>
    <div class="text-center mt-3">
        <a href="{{ route("login")}}" class="btn btn-outline-secondary">Login</a>
    </div>
</div>
@stop