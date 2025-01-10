<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Nova Senha</title>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center">Nova Senha</h3>
            <form action="{{ route('password.reset') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Nova Senha:</label>
                    <input type="password" class="form-control" name="password" placeholder="Nova Senha" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirme a Nova Senha:</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirme a Nova Senha" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Redefinir Senha</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>