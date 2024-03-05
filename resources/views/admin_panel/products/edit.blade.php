@extends('layouts.admin_panel.admin_panel')
@section('content')
    <form action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="name" class="form-label">Наименование</label>
            <input type="text" name="title" class="form-control" id="name"
                   value="{{$product->title}}">

            @error('title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>


        <div class="mb-3">
            <label for="price" class="form-label">Цена</label>
            <input type="text" name="price" class="form-control" id="price"
                   value="{{$product->price}}">

            @error('price')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <label for="textarea" class="form-label">Описание</label>
        <textarea class="block" name='description' id="textarea">{{$product->description}}</textarea>
        @error('description')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <input type="file" name='image0' class="block" accept="image/png, image/gif, image/jpeg"></input><br>
        @error('image0')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <div>
            @foreach($categories as $category)
                <label for="category">{{$category->title}}
                    <input type="checkbox" name="category_id[]" value="{{$category->id}}" id="category" class="form-label"
                           @foreach($product->categories as $product_category)
                               @if($product_category->id == $product->id) checked @endif
                        @endforeach>
                </label>
            @endforeach
        </div>
            <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
@section('navbar')
    @component('components.link')
        @slot('link'){{route('products.index')}}@endslot
        @slot('button')Back @endslot
    @endcomponent
@endsection
