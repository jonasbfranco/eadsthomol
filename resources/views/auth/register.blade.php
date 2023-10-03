<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<body>

    <h1>Register</h1>

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('register_action') }}">
        @csrf
        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" placeholder="Digite o seu nome" value="{{ @old('name') }}" />
            @error('name')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="email">E-mail</E-mail></label>
            <input type="text" name="email" placeholder="Digite seu e-mail" value="{{ @old('email') }}" />
            @error('email')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="password">Senha</label>
            <input type="password" name="password" placeholder="Digite sua senha" value="{{ @old('password') }}" />
            @error('password')
                <div class="error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label>Confirme sua Senha</label>
            <input type="password" name="password_confirmation" placeholder="Confirme sua senha"
                id="confirmeSenha_confirmation" />
        </div>
        <div>
            <button type="submit">Cadastar</button>
        </div>
    </form>
    <div class="register-area">
        Já tem cadastro? <a href="{{ route('login') }}">Fazer Login</a>
    </div>

</body>

</html>
