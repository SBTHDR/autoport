@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">

        @if (Auth::user())

        <div class="text-center">
            <h1 class="text-5xl  bold border inline-block border-gray-500 p-5 rounded-md">
                All Cars
            </h1>
        </div>

        <div class="pt-20">
            <a 
                href="cars/create"
                class="text-white font-bold bg-blue-500 p-3 rounded-md">
                Add a new car &rarr;
            </a>
        </div>

        <div class="w-5/6 py-24">
            @foreach ($cars as $car)
                <div class="m-auto">

                    <span class="uppercase text-blue-500 font-bold text-xs">
                        Founded: {{ $car->founded }}
                    </span>

                    <h2 class="text-gray-700 text-5xl">
                        Name: {{ $car->name }}
                    </h2>

                    <p class="text-lg text-gray-700 py-6">
                        Description: {{ $car->description }}
                    </p>

                    @if (!empty($car->image_path))
                            <img src="{{ asset('images/' . $car->image_path) }}" alt="" width="200px" class="border border-gray-700 p-2 mb-2">
                    @endif

                    @if (isset(Auth::user()->id))
                        <div class="flex">

                            <a 
                                href="cars/{{ $car->id }}/edit"
                                class="text-white font-bold bg-blue-500 p-3 rounded-md mr-2">
                                Edit car info &rarr;
                            </a>
                        
                            <form action="cars/{{ $car->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-white font-bold bg-red-500 p-3 rounded-md">
                                    Delete car &rarr;
                                </button>
                            </form>

                        </div>
                    @endif

                    <hr class=" mt-4 mb-8">
                </div>
            @endforeach
        </div>
        @else
            <div class="text-center">
                <h1 class="text-5xl  bold border inline-block border-gray-500 p-5 rounded-md">
                    You need to log in first!
                </h1>
            </div>
        @endif
    </div>
    
@endsection