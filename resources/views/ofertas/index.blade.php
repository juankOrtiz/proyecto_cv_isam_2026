<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas</title>
    <style>
        h1 {
            color:red;
        }
    </style>
</head>
<body>
    <h1>Ofertas</h1>
    <ul>
        <!-- Con PHP puro -->

        <!-- Con Blade -->
        @foreach($ofertas as $oferta)
            <li>{{ $oferta }}</li>
        @endforeach
    </ul>
    <a href="{{ route('ofertas.create') }}">Crear una nueva oferta</a>
</body>
</html>