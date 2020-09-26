@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    </head>
    <body>
        <div class="content">
            <div id="editar">
            </div>
        </div>
        <div class="content">
            <div id="volver">
            </div>
        </div>
    </body>

    <script> let nombreFruta= '{{ $nombreFruta }}' </script>
    <script defer type="text/javascript" src="{{ asset('js/app.js') }}"></script>
   
</html
@endsection