@extends('layouts.app')

@section('content')
<h1 class="text-2xl text-sky-500 ">Missions actives</h1>

<div class=" grid grid-cols-3 ">
    <div class=" col-span-2">
        @foreach($jobs as $job)
        <div class=" ml-24 mt-9 max-w-full">
            <div class=" px-12 py-5 mb-3 shadow-sm hover:shadow-md rounded-3xl border-2 border-blue-300">
                <div>
                    <h2 class="text-xl font-bold">{{ $job->titre}}</h2>
                </div>
                <p class="text-sm m-2 text-gray-800 ">{{ $job->description }}</p>
                <div class="flex items-center">
                    <span class="text-sm font-bold mt-2 text-sky-500">BUDJET: {{ number_format($job-> budget, -2, '.', '.') }} FCFA</span>
                </div>
                <div class="text-right mr-7 font-bold">
                    <a class=" hover:underline-offset-4 text-sm hover:text-sky-300  shadow-lg shadow-sky-500/40  " href="{{ route('jobs.show', $job->id) }}">Consulter la mission</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="ml-5 mt-28">
        <img src="/mission.jpg" class="h-72" alt="">
    </div>
</div>

<div>
    <br>
</div>

@endsection
@section('content')