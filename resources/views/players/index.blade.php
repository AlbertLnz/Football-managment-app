@extends('layouts.plantilla')

@section('title', 'Players List')

@section('content')

  @include('layouts.partials.header')

  <div class="grid grid-cols-3 bg-orange-300">
  
    <div class="col-span-1 bg-green-400 rounded-lg mx-auto my-auto py-2 px-4">
      <a href="{{route('players.insert')}}">Add Player</a>
    </div>
  
    <div class="col-span-1">
      <p class="font-bold text-center py-4">Order By Surname ASC:</p>
    </div>

  </div>

  <div class="grid grid-cols-3">

    @foreach ($players as $player)
        
      <div class="bg-indigo-100 border-4 border-violet-500 my-10 rounded m-5">

        @php          
          $photo = str_replace(" ", "_", $player['surname']);
          $photo = strtr(utf8_decode($photo), utf8_decode('áéíóúÁÉÍÓÚñÑ'),'aeiouAEIOUnN');
          $photo = strtolower($photo);
          if(!file_exists(public_path()."/images/players/".$photo.".webp")){
            $photo = "anonymous";
          }
        @endphp

        <div> <!-- Player photo -->
          <img class="rounded-t-xs max-h-40 w-full" src="/images/players/{{$photo}}.webp" alt="{{$players[1]['name']}}"> 
        </div>

        <div class="font-mono text-center"> <!-- Personal info -->
          <p class="font-bold text-lg pt-2">{{$player['name']}}</p>
          <p class="font-bold text-2xl">{{$player['surname']}}</p>
          <p class="text-xs pb-2">{{"(".$player['birth'].")"}}</p>
        </div>

        <div class="text-center"> <!-- Position & Market Value -->
          <p class="text-xs italic py-1">@php echo strtoupper($player['position']); @endphp</p>
          <p class="text-[14px] align-self-center">Market Value: {{$player['market_value']."€"}}</p>
        </div>

        @if($player['team_id'] != null)
          <div class="text-center pt-2"> <!-- Player with Team -->
            <a class="underline cursor-pointer" href="{{route('teams.view', ['team' => $player['team_id']])}}">{{$player->team->name}}</a>
          </div>
        @else
          <div class="text-center pt-2"> <!-- Player without Team -->
            <a class="text-red-500 italic">Without Team</a>
          </div>
        @endif


        <div class="grid grid-cols-2 text-center align-center my-5">
          <div> <!-- Edit Player-->
            <a href="{{route('players.edit', ['player' => $player])}}" class="bg-amber-400 rounded-lg py-2 px-4">Edit</a>
          </div>

          <div> <!-- Delete Player -->
            <form action="{{route('players.destroy', ['player' => $player])}}" method="POST" onsubmit="return confirm('Are you sure to eliminate this Player?')">
              @csrf
              @method('delete')
              <button type="submit" class="bg-red-400 rounded-lg py-2 px-4">Delete</button>
            </form>
            
          </div>
        </div>
      </div>

    @endforeach

  </div>

  
  @include('layouts.partials.footer')

@endsection