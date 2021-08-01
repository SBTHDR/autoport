@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl  bold border inline-block border-gray-500 px-5 rounded-md">
                Edit a car
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/cars/{{ $car->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="block">
                {{-- <input 
                    type="file"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="image"
                    placeholder="Upload image..."> --}}

                <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="name"
                    value="{{ $car->name }}">

                    <input 
                        type="text"
                        class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                        name="founded"
                        value="{{ $car->founded }}">

                    <input 
                        type="text"
                        class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                        name="description"
                        value="{{ $car->description }}">

                    <button type="submit" class="block shadow-5xl mb-10 p-2 w-80 uppercase text-white font-bold bg-blue-500 rounded-md">
                        Update
                    </button>
            </div>
        </form>
    </div>
@endsection