<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DatoPersonal extends Model
{
    // Indicar cual es el nombre de la tabla vinculada a este modelo
    protected $table = 'datos_personales';

    // Definir la relacion con la tabla users
    // NOTA: el programador define el nombre del metodo de relacion, pero se sugiere que sea similar o haga referencia a la tabla relacionada (en este caso, 'usuario' en lugar de 'user')
    public function usuario(): BelongsTo
    {
        // Especificamos 'user_id' como la clave foranea a ser usada en esta relacion
        return $this->belongsTo(User::class, 'user_id');
    }
}
