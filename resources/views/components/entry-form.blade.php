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
    <form action="{{route('login_processing')}}" method="post" class="form-registration">
        @csrf
        <a href="#" class="button-close">&#65794;</a>
        <div class="header-form">
            <h1>Добро пожаловать</h1>

        </div>
        <div class="form-registration-inputs-block">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name='password' placeholder="Пароль">
        </div>
        <div class="buttons-form-registration">
            <button class="button-submit" type="submit">Войти</button>
            <a href="{{route('register')}}">Зарегистрироваться</a>
        </div>
    </form>
</div>
</body>
</html>
