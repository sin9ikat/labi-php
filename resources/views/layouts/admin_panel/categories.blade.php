@extends('layouts/admin_panel.admin_panel')
@section('navbar')
    @component('components.link')
        @slot('link'){{route('categories.create')}}@endslot
        @slot('button')Create zakaz @endslot
    @endcomponent
    @component('components.link')
        @slot('link'){{route('categories.edit',$category->id)}}@endslot
        @slot('button')Edit @endslot
    @endcomponent
    <form action="{{ route('categories.destroy',$category->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    @component('components.link')
        @slot('link'){{route('categories.index')}}@endslot
        @slot('button')Back @endslot
    @endcomponent
@endsection
