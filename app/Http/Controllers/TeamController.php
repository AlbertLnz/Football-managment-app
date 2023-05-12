<?php

namespace App\Http\Controllers;
use App\Models\Team;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){

        $teams = Team::all();

        return view('teams.index', ['teams' => $teams]);
    }
    
    public function insert(){
        return view('teams.insert');
    }

    public function store(Request $request){

        $team = new Team();

        $request->validate([
            'name' => 'required|unique:teams',
            'country' => 'required',
            'city' => 'required',
            'stadium' => 'required|unique:teams',
        ]);

        $team->name = $request->name;
        $team->country = $request->country;
        $team->city = $request->city;
        $team->stadium = $request->stadium;

        $team->save();

        return redirect()->route('teams.index');
    }
}
