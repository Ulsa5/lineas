<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    //Relación uno a muchos
    
    public function clients(){
        return $this->hasMany(Client::class);
    }
}
