<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('head')
    <title>{{ config('app.name', 'dijo') }}</title>
    
    
</head>
<body>
    
    @include('inc.navbar')
        @yield('top-section')
    <div id="app">
    <main>
        
        @yield('content')
        
        
    </main>
    </div>


    
    @include('inc.footer')
    
    {{-- <script src="{{ asset('js/jquery-3.3.1.js') }}" defer></script> --}}
   @yield('extra-js')
</body>
</html>