<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    use HasFactory;

    protected $fillable = ['tipo', 'producto_id', 'cantidad', 'fecha'];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
