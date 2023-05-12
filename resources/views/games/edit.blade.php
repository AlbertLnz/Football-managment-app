@extends('layouts.plantilla')

@section('title', 'Game Edit')

@section('content')

  @include('layouts.partials.header')
  
  <form action="{{route('games.update', ['game' => $game])}}" method="POST"> 

    @csrf
    @method('PUT')

    <div class="grid grid-cols-2">

    <h1 class="text-center mt-4 text-2xl underline font-semibold">Original Game match</h1>
    <h1 class="text-center mt-4 text-2xl underline font-semibold">Edit Game match</h1>
    
      <div class="ml-4 my-4"> <!-- Info Local Team-->
        <p>Local Team</p>
        <input type="text" class="bg-gray-100 w-[100%]" placeholder="{{$game->getOneTeam($game['local_team_id'])->name}}">
      </div>
  
      <div class="inline-block text-center mt-4 text-2xl"> <!-- Edit Local Team-->
        <div class="flex justify-center items-center">
          <select name="local_team_id" class="my-4 underline font-semibold">
            @php foreach($teams as $team): @endphp
              <option value="{{$team['id']}}" class="underline font-semibold">{{$team['name']}}</option>
            @php endforeach @endphp
          </select>
        </div>
        @error('local_team_id')
          <div>
            <small class="italic text-red-600 underline decoration-red-800 font-medium">Local Team & Visitant Team cannot be the same!</small>
          </div>
        @enderror
      </div>

      <div class="ml-4 my-4"> <!-- Info Visitant Team-->
        <p>Visitant Team</p>
        <input type="text" class="bg-gray-100 w-[100%]" placeholder="{{$game->getOneTeam($game['visitant_team_id'])->name}}">
      </div>
  
      <div class="inline-block text-center mt-4 text-2xl underline font-semibold"> <!-- Edit Visitant Team-->
        <div class="flex justify-center items-center">
          <select name="visitant_team_id" class="my-4">
            @php foreach($teams as $team): @endphp
              <option value="{{$team['id']}}">{{$team['name']}}</option>
            @php endforeach @endphp
          </select>
        </div>
      </div>

      <div class="ml-4 my-4"> <!--Info Date -->
        <p>Date</p>
        <input type="datetime-local" class="bg-gray-100 w-[100%]" name="date" value="{{old('date', $game->date)}}">
      </div>

      <div class="ml-4 my-4"> <!--Edit Date -->
        <p>Modified date</p>
        <input type="datetime-local" class="bg-gray-100 w-[100%]" name="date" value="{{$game->date}}">
        @error('date')
          <div>
            <small class="italic text-red-600 underline decoration-red-800">{{$message}}</small>
          </div>
       @enderror
      </div>
    </div>

    <button type="submit" class="flex p-2 m-3 border border-amber-600 bg-amber-500 rounded-md">Update</button>



  </form>

  @include('layouts.partials.footer')

@endsection