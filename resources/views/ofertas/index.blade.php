<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas</title>
</head>
<body>
    <h1>Ofertas</h1>
    <ul>
        <?php foreach($ofertas as $oferta): ?>
        <li><?= $oferta; ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="{{ route('ofertas.create') }}">Crear una nueva oferta</a>
</body>
</html>