<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="#">Enlace de prueba</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button>
                <span>cerrar sesión</span>
            </button>
        </form>
    </nav>

    <h1>DASHBOARD DE {{ Auth::user() ? Auth::user()->name : 'ANONIMO' }}</h1>
</body>
</html>