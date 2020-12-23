@extends('layout')

@section('title','Contact')

@section('content')

<div class="container">

    <h1>{{__('Contact')}}</h1>
    
    <form class="bg-white shadow rounded py-3 px-4" method="POST" action={{route('message.store')}}>
        @csrf
        {{-- la funcion old recuerdar los valores ingresados para que el usuario no tenga que volver a ingresar nuevamente los datos una vez que el formulario sea validado --}}
        <div class="form-group">
            <label for="name">Nombre</label>
            <input id=name class="form-control bg-light shadow-sm border-0" type="text" name="name" placeholder="Nombre" value="{{old('name')}}"><br>
            {!! $errors->first('name', '<small>:message</small> <br>') !!}
        </div>
            <input type="email" name="email" placeholder="Email" value="{{old('email')}}"><br>
        {!! $errors->first('email', '<small>:message</small> <br>') !!}
        <input type="text" name="subject" placeholder="Asunto" value="{{old('subject')}}"><br>
        {!! $errors->first('subject', '<small>:message</small> <br>') !!}
        <textarea name="content" id="" placeholder="Mensaje" cols="30" rows="10">{{old('content')}}</textarea><br>
        {!! $errors->first('content', '<small>:message</small> <br>') !!}
        <button>Enviar</button>
    </form>
</div>


@endsection