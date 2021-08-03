@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl  bold border inline-block border-gray-500 p-5 rounded-md">
                Add car info
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/cars" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="block">
                <input 
                    type="file"
                    class="block shadow-5xl mb-10 p-2 w-80 placeholder-gray-500 border"
                    name="image"
                    placeholder="Upload image...">
                    @error('image')
                        <p class=" text-red-400 mb-2">{{ $message }}</p>
                    @enderror

                <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="name"
                    placeholder="Brand name...">
                    @error('name')
                        <p class=" text-red-400 mb-2">{{ $message }}</p>
                    @enderror

                    <input 
                        type="text"
                        class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                        name="founded"
                        placeholder="Founded...">
                        @error('founded')
                            <p class=" text-red-400 mb-2">{{ $message }}</p>
                        @enderror

                    <input 
                        type="text"
                        class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                        name="description"
                        placeholder="Description...">
                        @error('description')
                            <p class=" text-red-400 mb-2">{{ $message }}</p>
                        @enderror

                    <button type="submit" class="block shadow-5xl mb-10 p-2 w-80 uppercase text-white font-bold bg-blue-500 rounded-md">
                        Submit
                    </button>
                    <a href="/cars" class="block shadow-5xl mb-10 p-2 w-80 uppercase text-white font-bold bg-gray-700 rounded-md text-center">
                        Back
                    </a>
            </div>
        </form>
    </div>
@endsection