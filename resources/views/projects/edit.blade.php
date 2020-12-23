
@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>Editar Proyecto </h1>

    
    @include('partials.validation-errors')

    <form method="POST" action="{{route('projects.update',$project)}}">
        @method('PATCH')
        @include('projects._form',['btnText' => 'Editar'])
       
    </form>

   
@endsection