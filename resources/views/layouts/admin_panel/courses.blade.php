@extends('layouts/admin_panel.admin_panel')
@section('navbar')
    @component('components.link')
        @slot('link'){{route('admin.courses.create')}}@endslot
        @slot('button')Create course @endslot
    @endcomponent
    @component('components.link')
        @slot('link'){{route('admin.courses.edit',$course->id)}}@endslot
        @slot('button')Edit @endslot
    @endcomponent
    <form action="{{ route('admin.courses.destroy',$course->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    @component('components.link')
        @slot('link'){{route('admin.courses.index')}}@endslot
        @slot('button')Back @endslot
    @endcomponent
@endsection
