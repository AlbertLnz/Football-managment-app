@extends('layouts.plantilla')

@section('title', 'Game Insert')

@section('content')

  @include('layouts.partials.header')

    <div>

      <form action="{{route('games.store')}}" method="POST">
        @csrf

        <input type="hidden" name="localTeam" value="{{$local_team['id']}}">

        <div class="flex py-2 text-3xl bg-lime-300 border-4 border-y-lime-500 justify-center items-center">
          <h2>Local Team</h2>
        </div>
        <div>
          <table class="w-full border text-center"> <!-- Local Info -->
            <thead>
              <tr class="bg-lime-200">
                <th class="border border-slate-300 p-2">Team</th>
                <th class="border border-slate-300 p-2">City</th>
                <th class="border border-slate-300 p-2">Country</th>
                <th class="border border-slate-300 p-2">Stadium</th>
              </tr>
            </thead>
            <tbody>
              <tr class="bg-lime-100">
                <td class="border border-slate-300 p-2">{{$local_team['name']}}</td>
                <td class="border border-slate-300 p-2">{{$local_team['city']}}</td>
                <td class="border border-slate-300 p-2">{{$local_team['country']}}</td>
                <td class="border border-slate-300 p-2">{{$local_team['stadium']}}</td>
              </tr>
            </tbody>
          </table>
        </div>
  
          <div class="flex items-center justify-center">
            <div class="inline-block">
              <label for="date">Select a date:
                <input type="datetime-local" name="date">
              </label>
            </div>
            <div class="inline-block py-5 ml-4 text-xl text-center font-extrabold">
              <p>VS</p>
            </div>
          </div>
 

        <div class="bg-red-100"> <!-- Visitant Info -->
          <div class="flex py-2 text-3xl bg-red-300 border-4 border-y-red-500 justify-center items-center">
            <h2>Visitant Team</h2>
          </div>
          <div class="grid grid-cols-2">
            <div class="flex justify-center items-center">
              <select name="opponentTeam" id="mySelect" class="my-4">
                @php foreach($teams as $team): @endphp
                  <option id="select" value="{{$team['id']}}">{{$team['name']}}</option>
                @php endforeach @endphp
              </select>
            </div>
    
            <div class="flex justify-center items-center">
              SHOW HIS PLAYERS
            </div>
          </div>
        </div>
  
        <button type="submit" class="flex my-4 mx-auto bg-teal-500 hover:bg-teal-700 text-white text-xl font-bold py-2 px-4 rounded">Create Game!</button>

      </form>

    </div>

  @include('layouts.partials.footer')

@endsection

<script>
  document.getElementById("mySelect").addEventListener("change", function() {
    ajaxFunction(this);
  });

  function ajaxFunction(selectElement) {
    var selectedOption = selectElement.options[selectElement.selectedIndex].value;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            window.location.href = 'http://127.0.0.1:8000/games/store'; //route
        }
    };
    xhr.open("GET", "/getRoute?selectedOption=" + selectedOption, true);
    xhr.send();
  }
</script>