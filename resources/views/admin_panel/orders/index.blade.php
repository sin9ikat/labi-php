@extends('layouts.admin_panel.admin_panel')
@section('content')

    @foreach($orders as $order)
        <a href="{{route('orders.show',$order->product_id)}}">{{$order->user_id}}</a><br>
    @endforeach

@endsection
@section('navbar')

@endsection
