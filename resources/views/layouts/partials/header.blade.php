<nav class="bg-gray-800 py-6 relative">
  <div class="container mx-auto flex px-8 xl:px-0">
    <div class="flex flex-grow items-center">
      <img class="h-16 w-16" src="{{asset('images/logo.webp')}}">
    </div>
    <div class="flex lg:hidden items-center">
      <img class="h-12 w-12" src="{{asset('images/icon-menu.svg')}}" onclick="openMenu()">
    </div>
    <div id="menu" class="lg:flex hidden flex-grow justify-between absolute lg:relative lg:top-0 top-20 left-0 bg-gray-800 w-full lg:w-auto items-center py-14 lg:py-0 px-8 sm:px-24 lg:px-0">
      <div class="flex flex-col lg:flex-row mb-8 lg:mb-0">
        <a href="{{route('home')}}" class="text-white text-2xl rounded border-2  border-white px-4 py-2 hover:bg-white hover:text-gray-800 hover:duration-300 lg:mr-7 mb-8 lg:mb-0 ">Home</a>
        <a href="{{route('teams.index')}}" class="text-white text-2xl rounded border-2  border-white px-4 py-2 hover:bg-white hover:text-gray-800 hover:duration-300 lg:mr-7 mb-8 lg:mb-0 ">Teams</a>
        <a href="{{route('players.index')}}" class="text-white text-2xl rounded border-2  border-white px-4 py-2 hover:bg-white hover:text-gray-800 hover:duration-300 lg:mr-7 mb-8 lg:mb-0 ">Players</a>
        <a href="{{route('games.index')}}" class="text-white text-2xl rounded border-2  border-white px-4 py-2 hover:bg-white hover:text-gray-800 hover:duration-300 lg:mr-7 mb-8 lg:mb-0 ">Games</a>
      </div>
      <div class="flex flex-col lg:flex-row text-center">
        <a href="#" class="text-white border border-white py-2 px-5 rounded-md hover:bg-white hover:text-gray-800 transition duration-500 ease-in-out lg:mr-4 mb-8 lg:mb-0">Log In</a>
        <a href="#" class="text-white bg-blue-500 border border-blue-500 py-2 px-5 rounded-md hover:bg-blue-600 hover:border-blue-700 transition duration-500 ease-in-out">Register</a>
      </div>
    </div>

  </div>

</nav>

<script>
  function openMenu(){
    let menu = document.getElementById('menu');

    if(menu.classList.contains('hidden')){
      menu.classList.remove('hidden');
    }else{
      menu.classList.add('hidden');
    }
  }
</script>