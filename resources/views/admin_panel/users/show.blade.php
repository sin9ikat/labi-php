@extends('layouts.admin_panel.users')
@section('content')
    <b>Имя:</b> {{ $user->name }}<br>
    <b>Электронная почта: </b> {{ $user->email }}<br>
    @if($user->email_verified_at != null)
        <b>Дата подтверждения электронной почты: </b> {{ $user->email_verified_at }}<br>
    @else
        <b>Электронная почта не подтверждена</b><br>
    @endif
    <b>Пароль: </b> {{ $user->password }}<br>
@endsection

