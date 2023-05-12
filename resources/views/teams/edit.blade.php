@extends('layouts.plantilla')

@section('title', 'Teams List')

@section('content')

  @include('layouts.partials.header')

    <div class="grid grid-cols-8 my-10">

      <div class="col-span-4 bg-neutral-300 border-4 border-slate-600 m-3 my-8 rounded-sm">
        <h2 class="text-center py-4 text-2xl font-bold underline">Actual Value</h2>
        <table class="content-center mx-auto mb-8">
          <thead>
            <tr>
              <th class="border border-slate-600 p-2">Name</th>
              <th class="border border-slate-600 p-2">City</th>
              <th class="border border-slate-600 p-2">Country</th>
              <th class="border border-slate-600 p-2">Stadium</th>
            </tr>
          </thead>

          <tbody class="text-center">
            <tr>
              <td class="border border-slate-600 p-1 py-2 px-5">@php echo $team['name'] @endphp</td>
              <td class="border border-slate-600 p-1 py-2 px-5">@php echo $team['city'] @endphp</td>
              <td class="border border-slate-600 p-1 py-2 px-5">@php echo $team['country'] @endphp</td>
              <td class="border border-slate-600 p-1 py-2 px-5">@php echo $team['stadium'] @endphp</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col-span-4 bg-indigo-300 border-4 border-sky-500 m-3 my-8 rounded-sm">
        <h2 class="text-center py-4 text-2xl font-bold underline">New Value</h2>

        <form action="{{route('teams.update', $team)}}" method="POST">

          @csrf
          @method('PUT')

          <table class="content-center mx-auto mb-8">
            <thead>
              <tr>
                <th class="border border-slate-300 p-2">Name</th>
                <th class="border border-slate-300 p-2">City</th>
                <th class="border border-slate-300 p-2">Country</th>
                <th class="border border-slate-300 p-2">Stadium</th>
              </tr>
            </thead>
  
            <tbody class="text-center">
              <tr>
                <td class="">
                  <input type="text" class="bg-gray-100 w-[100%]" placeholder="{{$team->name}}" name="name" value="{{old('name', $team->name)}}">
                </td>
                <td class="">
                  <input type="text" class="bg-gray-100 w-[100%]" placeholder="{{$team->city}}" name="city" value="{{old('city', $team->city)}}">
                </td>
                <td class="">
                  <input type="text" class="bg-gray-100 w-[100%]" placeholder="{{$team->country}}" name="country" value="{{old('country', $team->country)}}">
                </td>
                <td class="">
                  <input type="text" class="bg-gray-100 w-[100%]" placeholder="{{$team->stadium}}" name="stadium" value="{{old('stadium', $team->stadium)}}">
                </td>
              </tr>
              <tr>
                <td>
                  @error('name')
                    <br>
                    <div class="bg-slate-400 rounded py-2">
                      <p class="text-sm text-red-500 font-bold italic underline">*{{$message}}</p>
                    </div>
                  @enderror
                </td>
                <td>
                  @error('city')
                    <br>
                    <div class="bg-slate-400 rounded py-2">
                      <p class="text-sm text-red-500 font-bold italic text-[14px] underline">*{{$message}}</p>
                    </div>
                  @enderror
                </td>
                <td>
                  @error('country')
                    <br>
                    <div class="bg-slate-400 rounded py-2">
                      <p class="text-sm text-red-500 font-bold italic underline">*{{$message}}</p>
                    </div>
                  @enderror
                </td>
                <td>
                  @error('stadium')
                    <br>
                    <div class="bg-slate-400 rounded py-2">
                      <p class="text-sm text-red-500 font-bold italic underline">*{{$message}}</p>
                    </div>
                  @enderror
                </td>
              </tr>
            </tbody>
          </table>
          <button class="bg-amber-400 ml-4 mb-4 py-4 px-6 rounded-2xl" type="submit">Update</button>
        </form>
      </div>

    </div>

    
  @include('layouts.partials.footer')

@endsection