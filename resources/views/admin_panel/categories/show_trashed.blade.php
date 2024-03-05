@extends('layouts.admin_panel.categories')
@section('content')
    <b>Название:</b> {{ $category->name }}<br>
    <b>Slug: </b> {{ $category->slug }}<br>
    <b>Описание: </b> {{ $category->description }}<br>
    @if($category->parent != null)
        <b>Родительская категория: </b> {{ $category->parent->name }}<br>
    @endif
    @if(count($category->children) != 0)
        <b>Дочерние категории: </b><br> @foreach($category->children as $kid) {{$kid->name}}<br> @endforeach
    @endif
@endsection
@section('navbar')
    @component('components.link')
        @slot('link'){{route('admin.categories.index_trashed')}} @endslot
        @slot('button')Back @endslot
    @endcomponent
    @component('components.link')
        @slot('link'){{route('admin.categories.restore',$category->id)}} @endslot
        @slot('button')Restore @endslot
    @endcomponent
@endsection
