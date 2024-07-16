<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    public function games() //nombre va en plural por que es de muchos a muchos
    { //esta relacion es de muchos a muchos 
        return $this->belongsToMany('App\Models\Game');
    }
    public function player()
    {
        return $this->hasMany('App\Models\Player');
    }
    public function President()
    {
        return $this->belongsTo('App\Models\President');
    }
}
