@extends('layouts.admin_panel.admin_panel')
@section('content')
    <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name"
                       value="{{old('name')}}">

                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="email"
                       value="{{old('email')}}">

                @error('email')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="password" class="form-label">Password</label>
                <input type="text" name="password" class="form-control" id="password"
                       value="{{old('password')}}">

                @error('password')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
@section('navbar')
    @component('components.link')
        @slot('link'){{route('users.index')}}@endslot
        @slot('button')Back @endslot
    @endcomponent
@endsection
