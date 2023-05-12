@extends('layouts.plantilla')

@section('title', 'Home Page')

@section('content')

  @include('layouts.partials.header')
  

  <div>
    <h1 class="bg-zinc-400 text-center text-4xl font-serif hover:underline py-4">LIGA MANAGMENT APP</h1>
    <img src="/images/home/home.jpg" class="mx-auto py-2">
  </div>   


  @include('layouts.partials.footer')

@endsection