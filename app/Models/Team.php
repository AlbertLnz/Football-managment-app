<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function players(){
        return $this->hasMany('App\Models\Player');
    }

    public function titles(){
        return $this->belongsToMany('App\Models\Title');
    }

    public function games(){
        return $this->hasMany('App\Models\Game');
    }

}