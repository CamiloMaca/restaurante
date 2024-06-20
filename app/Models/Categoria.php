<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function platos(){
        return $this->hasMany('App\Models\Plato');
    }

    public function menu(){
        return $this->belongsTo('App\Models\Menu');
    }
}
