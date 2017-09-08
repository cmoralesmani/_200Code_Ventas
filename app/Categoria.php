<?php

namespace _200Code_Ventas;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categoria';
    protected $primaryKey='id_categoria';
    public $timestamps=false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'condicion'
    ];

    protected $guarded = [];
}
