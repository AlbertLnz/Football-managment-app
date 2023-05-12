<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Team;

class PlayerController extends Controller
{
    public function index(){
        $players = Player::orderBy('surname', 'asc')->get();

        return view('players.index', ['players' => $players]);
        // return view('cursos.index', compact('cursos'));
    }

    public function insert(){
        $teams = Team::all();
        return view('players.insert', compact('teams')); // --> compact('teams') == ['teams' => $temas] 
    }

    public function store(Request $request){

        $player = new Player();

        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'birth' => 'required',
            'market_value' => 'required',
            'position' => 'required',
            'team_id' => 'required',
        ]);

        $player->name = $request->name;
        $player->surname = $request->surname;
        $player->birth = $request->birth;
        $player->position = $request->position;
        $player->market_value = $request->market_value;
        $player->team_id = $request->team_id;

        $player->save();
        return redirect()->route('players.index');
    }

    public function edit($player){
        return view('players.edit', ['player' => Player::find($player), 'teams' => Team::all()]);
    }

    public function update(Player $player, Request $request){

        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'birth' => 'required',
            'market_value' => 'required',
            'position' => 'required',
            'team_id' => 'required',
        ]);

        $player->update($request->all());
        return redirect()->route('players.index');
    }

    public function destroy(Player $player){
        $player->delete();
        return redirect()->route('players.index');
    }
}
