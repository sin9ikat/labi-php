@extends('layouts.admin_panel.admin_panel')
@section('content')
    <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="title" class="form-control" id="name"
                   value="{{old('title')}}">

            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
@section('navbar')
    @component('components.link')
        @slot('link'){{route('categories.index')}}@endslot
        @slot('button')Back @endslot
    @endcomponent
@endsection
