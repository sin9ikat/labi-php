@extends('layouts/admin_panel.admin_panel')
@section('navbar')
    @component('components.link')
        @slot('link'){{route('admin.questions.create')}}@endslot
        @slot('button')Create question @endslot
    @endcomponent
    @component('components.link')
        @slot('link'){{route('admin.questions.edit',$question->id)}}@endslot
        @slot('button')Edit @endslot
    @endcomponent
    <form action="{{ route('admin.questions.destroy',$question->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    @component('components.link')
        @slot('link'){{route('admin.questions.index')}}@endslot
        @slot('button')Back @endslot
    @endcomponent
@endsection
