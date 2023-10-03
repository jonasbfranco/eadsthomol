<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/authLoginRegister.css" />
    <title>Register</title>
</head>

<body>

    <a href="index.html" class="back-button">← Voltar</a>
    <div class="login-page">
        <div class="login-area">

            <h1 class="login-title">Register</h1>
            <div class="text-login">
                Preencha os campos abaixo e realize seu cadastro.
            </div>

            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('register_action') }}">
                @csrf
                <div class="name-area">
                    <label class="name-label" for="name">Nome</label>
                    <input type="text" name="name" class="@error('name') is-invalid @enderror"
                        placeholder="Digite o seu nome" value="{{ @old('name') }}" />
                    @error('name')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="email-area">
                    <label for="email">E-mail</E-mail></label>
                    <input type="text" name="email" class="@error('email') is-invalid @enderror"
                        placeholder="Digite seu e-mail" value="{{ @old('email') }}" />
                    @error('email')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="password-area">
                    <label class="password-label" for="password">Senha</label>
                    <input class="password-input-area" type="password" name="password"
                        class="@error('password') is-invalid @enderror" placeholder="Digite sua senha"
                        value="{{ @old('password') }}" />
                    @error('password')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="password-area">
                    <label class="password-label" for="password_confirmation">Confirme sua Senha</label>
                    <input class="password-input-area" type="password"
                        class="@error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                        placeholder="Confirme sua senha" id="confirmeSenha_confirmation" />
                </div>
                <div>
                    <button class="login-button" type="submit">Cadastar</button>
                </div>
            </form>
            <div class="register-area">
                Já tem cadastro? <a href="{{ route('login') }}">Fazer Login</a>
            </div>
        </div>
        <div class="terms">
            Ao continuar, você concorda com os <a href="">Termos de Uso</a> e a
            <a href="">Política de Privacidade</a>, e também, em receber
            comunicações via e-mail e push de todos os nossos parceiros.
        </div>
    </div>



    <script>
        if (typeof togglePasswordVisibility !== 'function') {
            function togglePasswordVisibility(inputId) {
                const input = document.getElementById(inputId);
                input.type = input.type === 'password' ? 'text' : 'password';

                /* if (input.type == 'password') {
                    input.type = 'text';
                } else {
                    input.type = 'password';
                } */
            }
        }
    </script>




</body>

</html>
