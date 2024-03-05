@extends('layouts.admin_panel.admin_panel')
@section('content')
    <b>Продукт ID:</b> {{ $order->product_id }}<br>
    <b>Пользователь ID:</b> {{ $order->user_id }}<br>

@endsection

