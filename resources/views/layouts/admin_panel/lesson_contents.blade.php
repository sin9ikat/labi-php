@extends('layouts/admin_panel.admin_panel')
@section('navbar')
    @component('components.link')
        @slot('link'){{route('admin.lesson_contents.create')}}@endslot
        @slot('button')Create lesson content @endslot
    @endcomponent
    @component('components.link')
        @slot('link'){{route('admin.lesson_contents.edit',$lessonContent->id)}}@endslot
        @slot('button')Edit @endslot
    @endcomponent
    <form action="{{ route('admin.lesson_contents.destroy',$lessonContent->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    @component('components.link')
        @slot('link'){{route('admin.lesson_contents.index')}}@endslot
        @slot('button')Back @endslot
    @endcomponent
@endsection
