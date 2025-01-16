@extends('auth.authbase')

@section('title', 'Login')

@section('content')
    <div class="card p-4 shadow-lg" style="width: 100%; max-width: 400px;">
        @if(session('error'))
            <div class="alert alert-danger">
                <ul>
                    <li>{{ session('error') }}</li>
                </ul>
            </div>
        @endif
        <h2 class="text-center mb-4">Login</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Digite seu email" required>
            </div>
            <div class="form-group mb-3">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" name="password" placeholder="Senha" required>
            </div>
             <!-- Botão de Login -->
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
        </form>
        @if (Route::has('register'))
            <div class="text-center mt-3">
                <a href="{{ route('register') }}"
                    class="btn btn-outline-secondary">
                    Register
                </a>
            </div>
        @endif
    </div>
@stop