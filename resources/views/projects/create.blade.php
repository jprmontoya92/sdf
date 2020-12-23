@extends('layout')


@section('title','Portfolio')

@section('content')
    <h1>Crear Proyecto </h1>

    @include('partials.validation-errors')

    <form method="POST" action="{{route('projects.store')}}">
        @include('projects._form',['btnText'=> 'Guardar'])
    </form>

   
@endsection