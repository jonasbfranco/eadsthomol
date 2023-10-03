<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>

    <h1>Login</h1>

    @if (Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">E-mail</E-mail></label>
            <input type="text" name="email" placeholder="Digite seu e-mail" />
        </div>
        <div>
            <label for="password">Senha</label>
            <input type="password" name="password" placeholder="Digite sua senha"/>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
    
    <div class="register-area">
        Ainda não tem cadastro? <a href="{{ route('register') }}">Cadastre-se</a>
    </div>

</body>

</html>
