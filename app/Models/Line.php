<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'icc',
    ];

    //Relacion uno a muchos inversa (clients)
    public function clients(){
        return $this->belongsTo(Client::class);
    }

    //Relación uno a muchos inversa (telcos)
    public function telcos(){
        return $this->belongsTo(Telco::class);
    }

    //Relación uno a muchos inversa (plans)
    public function plans(){
        return $this->belongsTo(Plan::class);
    }
}
