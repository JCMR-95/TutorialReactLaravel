@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    </head>
    <body>
        <div class="content">
            <div id="listado">
            </div>
        </div>
    </body>

    <script defer type="text/javascript" src="{{ asset('js/app.js') }}"></script>
   
</html
@endsection