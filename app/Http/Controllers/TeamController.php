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

    public function selected(Request $request){
        $selectedTeam = $request->input('selectedTeam');
        return redirect()->route('teams.view', ['team' => $selectedTeam]);
    }

    public function edit($team){
        return view('teams.edit', ['team' => Team::find($team)]); //$team = su id
    }

    public function update(Team $team, Request $request){
        
        $request->validate([
            'name' => 'required|unique:teams',
            'country' => 'required',
            'city' => 'required',
            'stadium' => 'required|unique:teams',
        ]);
        
        $team->update($request->all());
        return redirect()->route('teams.index');
    }
}
