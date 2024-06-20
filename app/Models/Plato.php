<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    use HasFactory;

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }

    public function ordens(){
        return $this->belongsToMany('App\Models\Orden');
    }
}
