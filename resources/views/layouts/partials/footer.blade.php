<div class="grid grid-cols-2 py-6 bg-gray-800 text-center text-white">

  <div class="grid grid-rows-4 m-5 py-2">
    <h3 class="text-xl py-2 hover:underline">League App Ltd</h3>
    <p class="py-2">City: Richfield</p>
    <p class="py-2">Street: 54 Main St, Richfield, PA 17086, United States</p>
    <p class="py-2">Postal Code: 17086</p>
  </div>


  <div class="grid grid-rows-4 items-center justify-center m-5 py-2">
    <div>
      <a href="{{route('home')}}" class="block text-xl py-2 hover:underline">Home</a><span></span>
    </div>
    <div>
      <a href="{{route('teams.index')}}" class="block py-2">Show Teams</a><span></span>
    </div>
    <div>
      <a href="{{route('players.index')}}" class="block py-2">Show Players</a>
    </div>
    <div>
      <a href="{{route('games.index')}}" class="block py-2">Show Games</a>
    </div>
  </div>


</div>