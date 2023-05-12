<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class Game extends Model
{
    use HasFactory;

    public $guarded = [];
    // public $fillable = ['local_team_id', 'visitant_team_id', 'date'];

    public function getOneTeam($id){
        return Team::find($id);
    }

    public function teams(){
        return $this->belongsTo('App\Models\Team');
    }

}
