<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/css/style-form.css'])
    <title>Form registration</title>
</head>
<body>
<div class="container">
    <div class="login form">
        <h1>Регистрация</h1>
        <form action="{{route('register_processing')}}" method="POST">
            @csrf
            <input name="email" type="email" placeholder="Введите свой email" value="{{old('email')}}">
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input name="name" type="text" placeholder="Имя" value="{{old('name')}}">
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="role_id"
                    id="role">
                <option value="nothing" disabled selected style="display: none">Выберите роль</option>
                <option value="1">Creator</option>
                <option value="2">Reader</option>
                <option value="3">Admin</option>
            </select>
            @error('role_id')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input name="password"  type="password" placeholder="Введите свой пароль" value="{{old('password')}}">
            @error('password')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input name="password_confirmation"  type="password" placeholder="Повторите свой пароль">
            @error('password_confirmation')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input type="submit" class="button" value="Зарегистрироваться">
        </form>
        <div class="singup">
                <span class="singup">Есть аккаунт?
                    <a href="{{route('login')}}">Войдите</a>
                </span>
        </div>
    </div>
</div>
</body>
</html>
