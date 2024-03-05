@extends('layouts.admin_panel.admin_panel')
@section('content')
    @foreach($users as $user)
        <a href="{{route('users.show',$user->id)}}">{{$user->id}}. {{ $user->name }}</a><br>
    @endforeach

    {{ $users->links() }}
@endsection
@section('navbar')
    @component('components.link')
        @slot('link'){{route('users.create')}}@endslot
        @slot('button')Create user @endslot
    @endcomponent
@endsection
