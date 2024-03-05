@extends('layouts.admin_panel.categories')
@section('content')
    <b>Название:</b> {{ $category->title }}<br>
    @if($category->parent != null)
        <b>Родительская категория: </b> {{ $category->parent->name }}<br>
    @endif
    @if(count($category->children) != 0)
        <b>Дочерние категории: </b><br> @foreach($category->children as $kid) {{$kid->name}}<br> @endforeach
    @endif
@endsection

