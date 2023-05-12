@extends('layouts.plantilla')

@section('title', 'Players List')

@section('content')

  @include('layouts.partials.header')

    <div class="flex bg-blue-50 border-solid border-2 border-sky-700 mx-auto items-center justify-center my-10 w-1/2 rounded-xl">

      <form action="{{route('players.store')}}" method="POST">

        @csrf

        <div class="grid grid-cols-2 py-4">

          <div class="flex my-4 mx-5 justify-end items-center"> <!-- Name -->
            <label>Name: </label>
          </div>
          <div>
            <input type="text" name="name">
          </div>
          @error('name')
            <div class="col-span-2 font-xs -mt-3 mb-4 mr-8 justify-self-end text-red-500 italic">
              {{$message}}
            </div>
          @enderror

          <div class="flex my-4 mx-5 justify-end items-center"> <!-- Surname -->
            <label>Surname: </label>
          </div>
          <div>
            <input type="text" name="surname">
          </div>
          @error('surname')
            <div class="col-span-2 font-xs -mt-3 mb-4 mr-8 justify-self-end text-red-500 italic">
              {{$message}}
            </div>
          @enderror

          <div class="flex my-4 mx-5 justify-end items-center"> <!-- Birth -->
            <label>Birth: </label>
          </div>
          <div>
            <input type="date" name="birth">
          </div>
          @error('birth')
            <div class="col-span-2 font-xs -mt-3 mb-4 mr-16 justify-self-end text-red-500 italic">
              {{$message}}
            </div>
          @enderror

          <div class="flex my-4 mx-5 justify-end items-center"> <!-- Position -->
            <label>Position: </label>
          </div>
          <div>
            <select name="position">
              <option name="position" value="goalkeeper">Goalkeeper</option>
              <option name="position" value="defender">Defender</option>
              <option name="position" value="midfielder">Midfielder</option>
              <option name="position" value="attacker">Attacker</option>
            </select>
          </div>

          <div class="flex my-4 mx-5 justify-end items-center"> <!-- Market Value -->
            <label>Market Value: </label>
          </div>
          <div class="flex">
            <input type="number" name="market_value" class="h-10 w-full" placeholder="from 100.000 to 100.000" step="100000">
            <p class="text-xs italic self-center pl-2">(€)</p>
          </div>
          @error('market_value')
            <div class="col-span-2 font-xs -mt-3 mb-4 mr-2 justify-self-end text-red-500 italic">
              {{$message}}
            </div>
          @enderror

          <div class="flex my-4 mx-5 justify-end items-center"> <!-- Team -->
            <label>Team</label>
            <p class="text-xs italic pl-1">(non-mandatory field)</p>
            <p>:</p>
          </div>
          <div>
            <select name="team_id">
                <option value="" class="italic">Free agent</option>
              @php foreach($teams as $team): @endphp
                <option value="{{$team['id']}}">{{$team['name']}}</option>
              @php endforeach @endphp
            </select>
          </div>

          <div class="col-span-2 flex items-center justify-center"> <!-- Button -->
            <button type="submit" class="flex bg-blue-400 py-2 px-4 my-3 rounded-lg hover:underline hover:font-semibold">Register</button>
          </div>

        </div>
      </form>
    </div>

  @include('layouts.partials.footer')

@endsection