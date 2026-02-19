<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $softDeletes = true;
    protected $fillable = [
    'nombre',
    'descripcion',
    'precio',
    'stock'
];
}
