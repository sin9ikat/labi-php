@extends('layouts.admin_panel.categories')
@section('content')
    <form action="{{route('categories.update', $category->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="title" class="form-control" id="name"
                   value="{{$category->title}}">

            @error('title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
