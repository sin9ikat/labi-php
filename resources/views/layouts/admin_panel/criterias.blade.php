@extends('layouts/admin_panel.admin_panel')
@section('navbar')
    @component('components.link')
        @slot('link'){{route('admin.criterias.create')}}@endslot
        @slot('button')Create scale criteria @endslot
    @endcomponent
    @component('components.link')
        @slot('link'){{route('admin.criterias.edit',$criteria->id)}}@endslot
        @slot('button')Edit @endslot
    @endcomponent
    <form action="{{ route('admin.criterias.destroy',$criteria->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    @component('components.link')
        @slot('link'){{route('admin.criterias.index')}}@endslot
        @slot('button')Back @endslot
    @endcomponent
@endsection
