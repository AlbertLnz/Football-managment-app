@extends('layouts.plantilla')

@section('title', 'Teams List')

@section('content')

  @include('layouts.partials.header')

  <form action="{{route('players.update', $player)}}" method="POST">

    @csrf
    @method('PUT')

    <div class="flex m-5">
      <div class="grid grid-rows-2 mx-auto p-4 bg-blue-200 border border-emerald-700 rounded-2xl">


        <div class="flex justify-self-end	text-end pr-4 self-center"> <!-- Name -->
          <label>Name:</label>
        </div>
        <div>
          <input id="delete_name" name="name" type="text" value="{{$player['name']}}">
          <input type="button" value="Blank" class="bg-amber-400 ml-2 px-4 py-2 rounded-2xl cursor-pointer" onclick="document.getElementById('delete_name').value=''">
        </div>
          @error('name')
              <small class="col-span-2 justify-self-end mr-20 h-6 italic font-semibold text-red-500">*{{$message}}</small>
          @enderror



        <div class="flex justify-self-end	text-end pr-4 self-center"> <!-- Surname -->
          <label>Surname:</label>
        </div>
        <div class="mt-1">
          <input id="delete_surname" name="surname" type="text" value="{{$player['surname']}}">
          <input type="button" value="Blank" class="bg-amber-400 ml-2 px-4 py-2 rounded-2xl cursor-pointer" onclick="document.getElementById('delete_surname').value=''">
        </div>
        @error('surname')
          <small class="col-span-2 justify-self-end mr-20 h-6 italic font-semibold text-red-500">*{{$message}}</small>
        @enderror

        <div class="flex justify-self-end	text-end pr-4 self-center"> <!-- Birth -->
          <label>Birth:</label>
        </div>
        <div class="mt-2 place-self-end">
          <input id="delete_birth" name="birth" type="date" value="{{$player['birth']}}">
          <input type="button" value="Blank" class="bg-amber-400 ml-2 px-4 py-2 rounded-2xl cursor-pointer" onclick="document.getElementById('delete_birth').value=''">
        </div>
        @error('birth')
          <small class="col-span-2 justify-self-end mr-20 h-6 italic font-semibold text-red-500">*{{$message}}</small>
        @enderror

        <div class="flex justify-self-end	text-end pr-4 self-center"> <!-- Position -->
          <label>Position:</label>
        </div>
        <div class="mt-2">
          <input id="delete_position" type="text" list="position" value={{$player['position']}}>
          <datalist id="position">
            <option value="goalkeeper">
            <option value="defender">
            <option value="midfielder">
            <option value="attacker">
          </datalist>
          <input type="button" value="Blank" class="bg-amber-400 ml-2 px-4 py-2 rounded-2xl cursor-pointer" onclick="document.getElementById('delete_position').value=''">
        </div>
        @error('position')
          <small class="col-span-2 justify-self-end mr-20 h-6 italic font-semibold text-red-500">*{{$message}}</small>
        @enderror

        <div class="flex justify-self-end	text-end pr-4 self-center"> <!-- Market Value -->
          <label>Market Value:</label>
        </div>
        <div class="mt-2">
          <input id="delete_market_value" name="market_value" type="number" value="{{$player['market_value']}}">
          <input type="button" value="Blank" class="bg-amber-400 ml-2 px-4 py-2 rounded-2xl cursor-pointer" onclick="document.getElementById('delete_market_value').value=''">
        </div>
        @error('market_value')
          <small class="col-span-2 justify-self-end mr-20 h-6 italic font-semibold text-red-500">*{{$message}}</small>
        @enderror

        <div class="flex justify-self-end	text-end pr-4 self-center"> <!-- Team -->
          <label>Team:</label>
        </div>
        <div class="mt-2">
          <input id="delete_team" name="team_id" type="text" list="teams" value="{{$player->team->name}}">
          <datalist id="teams">

            @foreach ($teams as $team)
              <option value="{{$team['name']}}">
            @endforeach

          </datalist>
          <input type="button" value="Blank" class="bg-amber-400 ml-2 px-4 py-2 rounded-2xl cursor-pointer" onclick="document.getElementById('delete_team').value=''">
        </div>
        @error('team_id')
          <small class="col-span-2 justify-self-end mr-20 h-6 italic font-semibold text-red-500">*{{$message}}</small>
        @enderror

        <div class="flex col-span-2 items-center justify-center"> <!-- Button's -->
          <input type="reset" value="Reset All" class="bg-rose-400 ml-2 px-4 py-2 rounded-lg cursor-pointer mr-4 hover:underline hover:font-semibold">
          <button type="submit" class="bg-blue-400 py-2 px-4 my-3 rounded-lg hover:underline hover:font-semibold">Update</button>
        </div>
  
      </div>
    </div>
  </form>

  @include('layouts.partials.footer')

@endsection