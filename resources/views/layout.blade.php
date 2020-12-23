<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Hola secundario')</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="{{mix('js/app.js')}}" defer></script>

    <style>
 
    </style>
</head>
<body>
    <div id="app" class=" d-flex flex-column  h-screen justify-content-between">

        <header>
            @include('partials.nav')
            @include('partials.session-status')
        </header>
        
        <main>
            @yield('content')
        </main>

        <footer class="bg-white text-cemter text-black-50 py-3 shadow">
         {{config('app.name')}} || Copyright @ {{date('Y')}}
        </footer>
    </div>
</body>
</html>