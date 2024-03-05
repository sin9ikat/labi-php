@extends('layouts.admin_panel.products')
@section('content')
    <b>Название:</b> {{ $product->title }}<br>


    <b>Цена:</b> {{$product->price}}<br>

    <b>Описание:</b><br>
    {!! $product->description !!}<br>
    <b>Изображение:</b><br>
    <img src="{{asset(\Illuminate\Support\Facades\Storage::url($product->image))}}" alt=""><br>

    @if(count($product->categories) != 0)
        <b>Заказ: </b><br> @foreach($product->categories as $category) {{$category->title}}<br> @endforeach
    @endif
@endsection

