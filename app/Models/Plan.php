<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'minutos',
        'internet',
        'beneficios',
        'costo',
        'contrato',
    ];

    //Relación uno a muchos inversa (telcos)
    public function telcos(){
        return $this->belongsTo(Telco::class);
    }

    //Relación uno a muchos (lines)
    public function lines(){
        return $this->hasMany(Line::class);
    }
}
