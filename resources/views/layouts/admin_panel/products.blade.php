@extends('layouts/admin_panel.admin_panel')
@section('navbar')
    @component('components.link')
        @slot('link'){{route('products.create')}}@endslot
        @slot('button')Create product @endslot
    @endcomponent
    @component('components.link')
        @slot('link'){{route('products.edit',$product->id)}}@endslot
        @slot('button')Edit @endslot
    @endcomponent
    <form action="{{ route('products.destroy',$product->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    @component('components.link')
        @slot('link'){{route('products.index')}}@endslot
        @slot('button')Back @endslot
    @endcomponent
@endsection
