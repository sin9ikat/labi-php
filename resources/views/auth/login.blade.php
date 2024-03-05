<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/style-form.css')
    <title>Login Form</title>
</head>
<body>
<div class="container">
    <div class="login form">
        <h1>Вход</h1>
        <form action="{{route('login_processing')}}" method="POST">
            @csrf
            <input name="email" type="text" placeholder="Введите свой email">
            <input name="password" type="password" placeholder="Введите свой пароль">
            <a href="#">Забыли пароль?</a>
            <input type="submit" class="button" value="Вход">
        </form>
        <div class="singup">
                <span class="singup">Нет аккаунта?
                    <a href="{{route('register')}}">Зарегистрируйтесь</a>
                </span>
        </div>
    </div>
</div>
</body>
</html>
