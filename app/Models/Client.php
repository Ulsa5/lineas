<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'dpi',
    ];

    //Relación uno a muchos (lines)
    public function lines(){
        return $this->hasMany(Line::class);
    }

    //Relacion uno a muchos inversa (occupations)

    public function occupations(){
        return $this->belongsTo(Occupation::class);
    }

    public function departments(){
        return $this->belongsTo(Department::class);
    }

    //Relación muchos a muchos (smartphones)

    public function smartphones(){
        return $this->belongsToMany(Smartphone::class);
    }


}
