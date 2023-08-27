<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'direccion',
    ];

    //Relación muchos a muchos (departments)
    public function departments(){
        return $this->belongsToMany(Department::class);
    }
}
