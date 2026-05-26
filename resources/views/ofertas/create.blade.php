<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva oferta</title>
</head>
<body>
    <h1>Nueva oferta</h1>
    <form action="{{ route('ofertas.store') }}" method="POST">
        <div>
            <p>Ingrese el nombre de la oferta</p>
            <input type="text" name="nombre">
            <button>Guardar</button>
        </div>
    </form>
</body>
</html>