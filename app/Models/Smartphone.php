<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smartphone extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca',
        'modelo',
        'color',
        'imei',
    ];

    //Relación muchos a muchos (clientes)
    public function clients(){
        return $this->belongsToMany(Client::class);
    }
}
