@extends('layout')

@section('title','Home')

@section('content')
    <h1>Bienvenido </h1>
    {{-- esta directiva muestra el contenido si solo el usuario esta autenticado --}}
    @auth
        {{-- modemos accder a la autenticacion a traves del helper auth obtiendo un objeto de usuario --}}
    {{auth()->user()->name}}
   @endauth
    
@endsection