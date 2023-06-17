@extends('layouts.app')

@section('content')

<div class=" px-3 py-20 mb-3 shadow-md rounded border-2">

   <div class="grid grid-cols-2">
      <div class="">
         <h1 class="text-3xl text-sky-500 mb-3">{{ $job->titre  }}</h1>
      </div>

      <div class="ml-48 px-3 py-2 w-40 text-center mb-3 shadow-md rounded border-2">
         <label for="">BUDGET:</label><br>
         <span class="text-sm text-gray-600">{{ number_format($job->budget, -2, '.', '.') }} FCFA</span>
      </div>
   </div>

</div>

<div class="grid grid-cols-2">
   <div class="ml-3 mt-2">
      <span class="">Description du projet</span>
      <div class=" font-semibold leading-loose mt-2 px-3 py-5 mb-3 shadow-sm hover:shadow-md rounded border-2 border-blue-300">
         <p class="text-md text-gray-800">{{ $job->description }}</p>
      </div>

   </div>
   <div class="">
      ok
   </div>

</div>

<section x-data="{open: false}" class="ml-3">
   <a href="#" class="text-sky-500" @click="open = !open">Cliquez ici pour déposer une offre</a>

   <form x-show="open" x-cloak method="POST" action="{{ route('proposals.store',$job) }}">
      @csrf
      <textarea class="p-3 mb-4 shadow font-thin w-full max-w-md " name="content" placeholder="Votre commentaire"></textarea><br>
      <input type="number" placeholder="Votre budget" class="shadow p-3"></input>
      <button type="submit" class="block bg-sky-700 text-white px-3 py-2 mt-3">soumettre</button>
   </form>
</section>

@endsection