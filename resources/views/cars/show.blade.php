@extends('layouts.app')

@section('content')
    <div class="m-auto w-3/6">
        <h1 class="text-5xl  bold border inline-block border-gray-500 p-5 rounded-md my-10">
            Car Info
        </h1>
    </div>

    <div class="m-auto w-3/6 p-10 border border-gray-500 rounded-md">

        @if (Auth::user())

            <div class="w-5/6 py-14">
                
                    <div class="m-auto">

                        <span class="uppercase text-blue-500 font-bold text-sm">
                            Founded: {{ $car->founded }}
                        </span>

                        <a href="cars/{{ $car->id }}">
                            <h2 class="text-gray-700 text-3xl py-6">
                                <strong>Name:</strong> {{ $car->name }}
                            </h2>
                        </a>

                        <p class="text-2xl text-gray-700 py-6 leading-8">
                            <strong>Description:</strong> {{ $car->description }}
                        </p>

                        <div class="my-4">
                            <p class="text-2xl text-gray-700 py-6 leading-8">
                                <strong>Models:</strong>
                                @forelse ($car->carModels as $models)
                                    <p class="inline">{{ $models->model_name }}</p> 
                                @empty
                                    <p>No other Models</p>
                                @endforelse
                            </p>
                        </div>
                        

                        @if (!empty($car->image_path))
                                <img src="{{ asset('images/' . $car->image_path) }}" alt="" width="80%" class="border border-gray-700 p-2 mb-2">
                        @endif
                    </div>
            </div>
        @endif
            <a href="/cars" class="block shadow-5xl p-2 w-40 uppercase text-white font-bold bg-gray-700 rounded-md text-center">
                Back
            </a>
    </div>
    
@endsection