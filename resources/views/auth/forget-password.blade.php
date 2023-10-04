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

            <h1 class="login-title">Recuperar senha</h1>
            <div class="text-login">
                Use seu email para recuperar sua senha.
            </div>

            @if ($errors->any()) {
                <div>
                    @foreach ($errors as $error)
                        <div class="alert alert-danger error" role="alert">
                            {{$error}}
                    @endforeach
                </div>
            }

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

            <form method="POST" action="{{ route('forget.password.post') }}">
                @csrf
                <div class="email-area">
                    <label class="email-label" for="email">E-mail</E-mail></label>
                    <input type="text" name="email" placeholder="Digite seu e-mail" />
                </div>
                <div>
                    <button class="login-button" type="submit">Recuperar</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
