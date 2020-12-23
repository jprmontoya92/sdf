@extends('layout')


@section('title','Portfolio')

@section('content')
    <h1>Portfolio </h1> <br>

    @include('partials.session-status')
    @auth
    <a href="{{route('projects.create')}}">Crear Proyecto</a> <br>
    @endauth

    @forelse ($projects as $projectItem)
    {{-- al pasar projectItem, laravel automaticamente pasa el id --}}
        <li><a href="{{route('projects.show',$projectItem)}}">{{$projectItem->title}}</a></li>
    @empty
        <li>No hay proyectos</li>
    @endforelse
    {{$projects->links()}}
@endsection