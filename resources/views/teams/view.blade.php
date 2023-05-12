@extends('layouts.plantilla')

@section('title', 'Teams List')

@section('content')

  @include('layouts.partials.header')

    <div class="grid grid-cols-4 my-10">
      <div class="col-span-1 bg-slate-200 border-4">
        <p class="ml-3 py-2">Name: <b>{{$team['name']}}</b></p>
        <p class="ml-3 py-2">City: <b>{{$team['city']}}</b></p>
        <p class="ml-3 py-2">Country: <b>{{$team['country']}}</b></p>
        <p class="ml-3 py-2">Stadium: <b>{{$team['stadium']}}</b></p>
      </div>

      <div class="grid grid-cols-2 grid-rows-2 bg-slate-400 border-4 place-items-center">


        <div class="justify-self-center self-center mt-2">
          <a href="{{route('teams.edit', ['team' => $team['id']])}}" class="flex bg-orange-400 justify-center items-center rounded-full w-16 h-16">Edit</a>
        </div>

        <div class="justify-self-center self-center mt-2">
          <form action="{{route('teams.destroy', ['team' => $team['id']])}}" method="POST" onsubmit="return confirm('Are you sure to eliminate this team?')">
            @csrf
            @method('delete')
            
            <button type="submit" class="flex bg-red-400 justify-center items-center rounded-full w-16 h-16">Delete</button>
          </form>
        </div>


        <div class="col-span-2">
          <a href="{{route('games.insert', ['local_team'=>$team])}}" class="flex bg-lime-400 p-2 m-4 justify-center rounded-lg">Create a new Game as&nbsp<strong>Local</strong>&nbspteam</a>
        </div>

      </div>

      <div class="col-span-2 bg-slate-200">
        <h2 class="text-center font-extrabold pt-1">{{$team['name']}} - Players</h2>

        <table class="w-full text-center">
          <thead>
            <tr>
              <th class="border border-stone-900 p-1">Name</th>
              <th class="border border-stone-900 p-1">Surname</th>
              <th class="border border-stone-900 p-1">Position</th>
              <th class="border border-stone-900 p-1">Market Value</th>
            </tr>
          </thead>

          <tbody>
            @if(sizeof($playersTeam) == 0)
              <td colspan="4" class="border border-stone-900 p-1 py-2 text-red-600 font-semibold italic underline">There aren't players of this team in the DataBase</td>
            @endif
            @php foreach($playersTeam as $player): @endphp
              <tr class="hover:bg-slate-400">
              <td class="border border-stone-900 p-1">@php echo $player['name'] @endphp</td>
              <td class="border border-stone-900 p-1">@php echo $player['surname'] @endphp</td>
              <td class="border border-stone-900 p-1">@php echo $player['position'] @endphp</td>
              <td class="border border-stone-900 p-1">@php echo $player['market_value'] @endphp</td>
            </tr>
           @php endforeach @endphp
     
          </tbody>
        </table>
        
      </div>

    </div>


  @include('layouts.partials.footer')

@endsection