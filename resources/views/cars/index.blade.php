@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl  bold border inline-block border-gray-500 px-5 rounded-md">
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

                    <hr class=" mt-4 mb-8">
                </div>
            @endforeach
        </div>  
    </div>

    
@endsection