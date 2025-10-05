@extends('layouts.app')

@section('content')
  <div id="search"></div>
@endsection

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vacation Rentals</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <h1>🏡 Vacation Rentals</h1>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>