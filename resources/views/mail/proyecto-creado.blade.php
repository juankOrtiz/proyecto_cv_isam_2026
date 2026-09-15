<h2>Nuevo proyecto</h2>
<p>Se ha creado un nuevo proyecto en nuestro sistema con los siguientes detalles:</p>

<ul>
    <li>Titulo: {{ $proyecto->titulo }}</li>
    <li>Descripcion: {{ $proyecto->descripcion }}</li>
    <li>Creado el: {{ $proyecto->created_at }}</li>
</ul>