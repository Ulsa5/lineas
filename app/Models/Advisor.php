<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'telefono',
        'correo',
        'asesor',
    ];

    //Relación uno a muchos inversa (telcos)
    public function telcos(){
        return $this->belongsTo(Telco::class);
    }
}
