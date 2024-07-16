<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    public function teams()//nombre va en plural por que es de muchos a muchos
    {//esta relacion es de muchos a muchos 
        return $this->belongsToMany('App\Models\Team'); 
    }
    public function goal()
    { 
        return $this->hasMany('App\Models\Goal'); 
    }
    
}
