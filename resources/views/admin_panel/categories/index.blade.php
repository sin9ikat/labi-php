@extends('layouts.admin_panel.admin_panel')
@section('content')
    @foreach($categories as $category)
        <a href="{{route('categories.show',$category->id)}}">{{$category->id}}. {{ $category->title }}</a><br>
    @endforeach

    {{ $categories->links() }}
@endsection
@section('navbar')
    @component('components.link')
        @slot('link'){{route('categories.create')}}@endslot
        @slot('button')Create zakaz @endslot
    @endcomponent
@endsection
