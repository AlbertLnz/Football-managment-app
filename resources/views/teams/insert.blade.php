@extends('layouts.plantilla')

@section('title', 'Teams List')

@section('content')

  @include('layouts.partials.header')

    <div class="flex bg-blue-50 border-solid border-2 border-sky-700 mx-auto items-center justify-center my-10 w-1/2 rounded-xl">
      <form action="{{route('teams.store')}}" method="POST">
        @csrf
        <div class="flex flex-col">
          <div class="flex my-4 justify-end items-center">
            <label class="mx-5">Name: </label>
            <input type="text" name="name" value="{{old('name')}}">
          </div>
          <div class="flex my-4 justify-end items-center">
            <label class="mx-5">Country: </label>
            <input type="text" name="country" value="{{old('country')}}">
          </div>
          <div class="flex my-4 justify-end items-center">
            <label class="mx-5">City: </label>
            <input type="text" name="city" value="{{old('city')}}">
          </div>
          <div class="flex my-4 justify-end items-center">
            <label class="mx-5 justify-center">Stadium: </label>
            <input type="text" name="stadium" value="{{old('stadium')}}">
          </div>
        </div>
        <div class="flex items-center justify-center">
          <button type="submit" class="flex bg-blue-400 py-2 px-4 my-3 rounded-lg hover:underline hover:font-semibold">Register</button>
        </div>

        @if ($errors->any())
          <div class="border-3 border-red-800 bg-red-500 rounded-lg py-4 text-center my-5 italic font-semibold">
            <ul>
              @foreach ($errors->all() as $error)
                <li>· {{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
  
      </form>
    </div>
    
  @include('layouts.partials.footer')

@endsection