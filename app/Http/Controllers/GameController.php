<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Team;

class GameController extends Controller
{
    public function index(){
        $games = Game::all();

        return view('games.index', ['games' => $games]);
    }

    public function insert(Team $local_team){
        $teams = Team::all();
        return view('games.insert', ['local_team' => $local_team, 'teams' => $teams]);
    }

    public function store(Request $request){

        $game = new Game();

        $game->date = $request->date;
        $game->local_team_id = $request->localTeam;
        $game->visitant_team_id = $request->opponentTeam;

        $game->save();

        return redirect()->route('games.index');
    }

    public function selected(Request $request){
        $selectedTeam = $request->input('selectedTeam');
        return redirect()->route('games.store', ['team' => $selectedTeam]);
    }

    public function edit($game){
        return view('games.edit', ['game' => Game::find($game), 'teams' => Team::all()]);
    }

    public function update(Game $game, Request $request){

        $request->validate([
            'local_team_id' => 'required|different:visitant_team_id',
            'visitant_team_id' => 'required|different:local_team_id',
            'date' => 'required'
        ]);
        
        $game->update($request->all());
        return redirect()->route('games.index');
    }

    public function destroy(Game $game){
        $game->delete();
        return redirect()->route('games.index');
    }
}
