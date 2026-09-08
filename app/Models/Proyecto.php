<?php

namespace App\Models;

use Database\Factories\ProyectoFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proyecto extends Model
{
    /** @use HasFactory<ProyectoFactory> */
    use HasFactory, SoftDeletes;

    /** @var list<string> */
    protected $fillable = [
        'titulo',
        'descripcion',
        'etiquetas',
    ];

    /**
     * @return Attribute<array<int, string>, never>
     */
    protected function tags(): Attribute
    {
        return Attribute::get(function (): array {
            if (empty($this->etiquetas)) {
                return [];
            }

            return array_values(array_filter(array_map('trim', explode(',', $this->etiquetas))));
        });
    }
}
