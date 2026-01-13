<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'precio'];

    public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class, 'ingrediente_pizza');
    }
}

