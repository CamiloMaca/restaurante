<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function mesa(){
        return $this->belongsTo('App\Models\Mesa');
    }

    public function platos(){
        return $this->belongsToMany('App\Models\Plato');
    }
    
}
