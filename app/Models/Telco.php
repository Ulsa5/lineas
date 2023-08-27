<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telco extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
    ];

    //Relación uno a muchos (lines)
    public function lines(){
        return $this->hasMany(Line::class);
    }

    //Relación uno a muchos (advisors)
    public function advisors(){
        return $this->hasMany(Advisor::class);
    }

    //Relación uno a muchos (plans)
    public function plans(){
        return $this->hasMany(Plan::class);
    }
}
