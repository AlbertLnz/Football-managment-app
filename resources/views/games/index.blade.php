@extends('layouts.plantilla')

@section('title', 'Games List')

@section('content')

  @include('layouts.partials.header')

    <table class="w-full border border-gray-900 text-center my-2">

      <thead>
        <tr>
          <th class="border border-green-500 py-2 text-xl">Local Team</th>
          <th class="border border-green-500 py-2 text-xl">Visitant Team</th>
          <th class="border border-green-500 py-2 text-xl">Stadium</th>
          <th class="border border-green-500 py-2 text-xl">Date Time</th>
          <th class="border border-green-500 py-2 text-xl">Actions</th>
        </tr>
      </thead>

      <tbody>
        @php foreach($games as $game): @endphp
        <tr>
         <td class="border border-green-500 py-1">@php echo $game->getOneTeam($game['local_team_id'])->name; @endphp</td>
         <td class="border border-green-500 py-1">@php echo $game->getOneTeam($game['visitant_team_id'])->name; @endphp</td>
         <td class="border border-green-500 py-1">@php echo $game->getOneTeam($game['local_team_id'])->stadium; @endphp</td>
         <td class="border border-green-500 py-1">@php echo $game['date'] @endphp</td>
         <td class="border border-green-500 py-1">

          <a href="{{route('games.edit', ['game' => $game])}}" class="bg-amber-500 rounded-lg px-3 py-1 mx-1 my-1">Edit</a>
          <div>
            <form action="{{route('games.destroy', ['game' => $game])}}" method="POST">
              @csrf
              @method('delete')
              <button type="submit" class="bg-red-500 rounded-lg px-3 py-1 mx-1 my-1">Delete</button>
            </form>
          </div>

         </td>
       </tr>
       @php endforeach @endphp
      </tbody>
      
    </table>
    
  @include('layouts.partials.footer')

@endsection