@extends('layouts.plantilla')

@section('title', 'Teams List')

@section('content')

  @include('layouts.partials.header')

  <div class="grid grid-cols-2 items-center justify-center my-4">
    <div class="flex mx-auto">
      <a href="{{route('teams.insert')}}" class="bg-lime-400 py-2 px-4 rounded-lg hover:underline hover:font-semibold">Add Team</a>
    </div>

    <div>
      <form action="{{route('teams.selected')}}" method="POST">
        @csrf
        <select name="selectedTeam">
          @php foreach($teams as $team): @endphp
            <option value="{{$team['id']}}">{{$team['name']}}</option>
          @php endforeach @endphp
        </select>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Search</button>
      </form>
    </div>

  </div>

  <table class="w-full border border-red-500 text-center">

    <caption class="caption-bottom text-left italic text-sm mt-1 pl-3">
      1. Table about Teams
    </caption>

    <thead class="bg-slate-500">
      <tr>
        <th class="border border-slate-300 p-2">Name</th>
        <th class="border border-slate-300 p-2">City</th>
        <th class="border border-slate-300 p-2">Country</th>
        <th class="border border-slate-300 p-2">Stadium</th>
      </tr>
    </thead>

    <tbody class="bg-slate-200">

      @php foreach($teams as $team): @endphp
       <tr class="hover:bg-slate-400">
        <td class="border border-slate-300 p-1">@php echo $team['name'] @endphp</td>
        <td class="border border-slate-300 p-1">@php echo $team['city'] @endphp</td>
        <td class="border border-slate-300 p-1">@php echo $team['country'] @endphp</td>
        <td class="border border-slate-300 p-1">@php echo $team['stadium'] @endphp</td>
      </tr>
      @php endforeach @endphp

    </tbody>
  </table>



  <script>
    function enviar() {
      var select = document.getElementById("id_select");
      return valor = select.options[select.selectedIndex].value;
    }
  </script>


  @include('layouts.partials.footer')

@endsection