<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/authLoginRegister.css">
    <title>Login</title>
</head>

<body>

    <div class="login-page">

        <div class="login-area">

            <h1 class="login-title">Login</h1>
            <div class="text-login">
                Use as suas credenciais para realizar o Login.
            </div>

            @if (Session::has('error'))
                <div class="alert alert-danger error" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="email-area">
                    <label class="email-label" for="email">E-mail</E-mail></label>
                    <input type="text" name="email" placeholder="Digite seu e-mail" />
                </div>
                <div class="password-area">
                    <div class="password-label">
                        <label class="password-area-text" for="password">Senha</label>
                        <a href="{{ route('forget.password') }}" class="password-area-forgot">Esqueceu sua senha?</a>
                    </div>
                    <div class="password-input-area">
                        <input type="password" name="password" placeholder="Digite sua senha" />
                        <img src="assets/icons/eyeIcon.png" alt="Ícone mostrar senha" />
                    </div>
                </div>
                <div>
                    <button class="login-button" type="submit">Login</button>
                </div>
            </form>
            <div class="register-area">
                Ainda não tem cadastro? <a href="{{ route('register') }}">Cadastre-se</a>
            </div>
        </div>
    </div>

</body>

</html>
