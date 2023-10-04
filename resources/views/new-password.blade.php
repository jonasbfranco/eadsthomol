<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/authLoginRegister.css">
    <title>Resetar senha</title>
</head>

<body>

    <div class="login-page">

        <div class="login-area">

            <h1 class="login-title">Recuperar senha</h1>
            <div class="text-login">
                Digite sua nova senha.
            </div>

            @if ($errors->any())
                <div>
                    @foreach ($errors as $error)
                        <div class="alert alert-danger error" role="alert">
                            {{$error}}
                    @endforeach
                </div>
            @endif

            @if (Session::has('error'))
                <div class="alert alert-danger error" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif

            @if (Session::has('success'))
                <div class="alert alert-success success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('reset.password.post') }}">
                @csrf
                <input type="text" name="token" hidden value="{{$token}}">
                <div class="email-area">
                    <label class="email-label" for="email">E-mail</E-mail></label>
                    <input type="text" name="email" placeholder="Digite seu e-mail" value="{{ @old('email') }}" />
                </div>
                <div class="password-area">
                    <label class="password-label" for="password">Nova Senha</label>
                    <div class="password-input-area">
                        <input type="password" name="password"
                            class="@error('password') is-invalid @enderror" placeholder="Digite sua senha"
                            id="confirmeSenha"/>
                        <img src="/assets/icons/eyeIcon.png" alt="Ícone mostrar/ocultar senha" id="image"
                            onclick="togglePasswordVisibility('confirmeSenha')" />
                    </div>
                    @error('password')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="password-area">
                    <label class="password-label" for="password_confirmation">Confirme sua nova Senha</label>
                    <div class="password-input-area">
                        <input type="password" class="@error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                            placeholder="Confirme sua senha" id="confirmeSenha_confirmation" />
                        <img src="/assets/icons/eyeIcon.png" alt="Ícone mostrar/ocultar senha"
                            onclick="togglePasswordVisibility('confirmeSenha_confirmation')" />
                    </div>
                </div>
                <div>
                    <button class="login-button" type="submit">Recuperar</button>
                </div>
            </form>
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
