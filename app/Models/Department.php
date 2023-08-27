<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    //Relación uno a muchos
    
    public function clients(){
        return $this->hasMany(Client::class);
    }

    //Relación muchos a muchos (enterprises)
    public function enterprises(){
        return $this->belongsToMany(Enterprise::class);
    }
}
