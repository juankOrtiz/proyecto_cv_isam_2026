<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ route('login.store') }}">
        @csrf
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" required autofocus>
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" required>
        </div>
        <div>
            <button type="submit">Iniciar Sesión</button>
        </div>
    </form>
</body>

</html>