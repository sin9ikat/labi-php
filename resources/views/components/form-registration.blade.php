<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/components/form-style.css','resources/css/components/zero.css'])
    <title>Document</title>
</head>
<body>
<div class="form-registration-block">
    <form action="{{route('register_processing')}}" method="post" class="form-registration">
        @csrf
        <a href="{{route('home')}}" class="button-close">&#65794;</a>
        <div class="header-form">
            <h1>Регистрация</h1>
            <div class="type-user">
                <a href="#" class="user">Покупаль</a>
                <a href="#" class="bisnes-user">Юридическое лицо</a>

            </div>
        </div>
        <div class="form-registration-inputs-block">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="password" placeholder="Пароль">
            <input type="text" name="password_confirmation" placeholder="Повторить пароль">
        </div>
        <div class="buttons-form-registration">
            <input class="button-submit" type="submit">Регистрация</input>
            <a href="{{route('login')}}">Войти в аккаунт</a>
        </div>
    </form>
</div>
</body>
</html>
