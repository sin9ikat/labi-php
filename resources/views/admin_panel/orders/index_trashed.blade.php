@extends('layouts.admin_panel.admin_panel')
@section('content')
    @foreach($categories as $category)
        <a href="{{route('admin.orders.show_trashed',$category->id)}}">{{$category->id}}. {{ $category->name }}</a><br>
    @endforeach

    {{ $categories->links() }}
@endsection
@section('navbar')
    <a class="btn btn-primary" href="{{route('admin.orders.index')}}">Back to undeleted categories</a>
@endsection
