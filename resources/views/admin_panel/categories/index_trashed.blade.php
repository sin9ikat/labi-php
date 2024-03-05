@extends('layouts.admin_panel.admin_panel')
@section('content')
    @foreach($categories as $category)
        <a href="{{route('admin.categories.show_trashed',$category->id)}}">{{$category->id}}. {{ $category->name }}</a><br>
    @endforeach

    {{ $categories->links() }}
@endsection
@section('navbar')
    <a class="btn btn-primary" href="{{route('admin.categories.index')}}">Back to undeleted categories</a>
@endsection
