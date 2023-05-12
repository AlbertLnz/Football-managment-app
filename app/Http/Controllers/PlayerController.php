<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index(){
        $players = Player::orderBy('surname', 'asc')->get();

        return view('players.index', ['players' => $players]);
        // return view('cursos.index', compact('cursos'));
    }
}
