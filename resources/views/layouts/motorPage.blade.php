@extends('layouts.app')

@section('content')

<h1 class="title text-3xl font-bold mb-2 m-3 p-3"> All Motor Bikes</h1>

<div class="row mb-0">
    <div class="p-3">
        <button class="h-10 w-50% text-black rounded-lg bg-blue-500 hover:bg-blue-600">
            <a href="{{ route('motor.create') }}"> Create a motor post </a>
        </button>
    </div>
</div>

<form action="">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg" style="width: 40%">
        <div class="absolute top-4 left-3">
            <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
        </div>
        <input type="text"
               name="search"
               class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
               placeholder="Search Motor posts..."
        />
        <div class="absolute top-2 right-2">
            <button
                type="submit"
                class="h-10 w-20 text-black rounded-lg bg-red-500 hover:bg-red-600"> Search
            </button>
        </div>
    </div>

</form>


<div class="lg:grid lg:grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-4">

    @foreach($motors as $motor)
        <div class="mx-4">
            <card class="p-10">
                <div class="flex flex-col items-center justify-center text-center border-2">
                    <h3 class="text-2xl mb-2">
                        {{$motor->name}}
                    </h3>
                    <div class="border border-gray-200 w-full mb-6"></div>

                    <img class="w-48 mr-6 mb-6"{{$motor->image}}>
                    <div class="border border-gray-200 w-full mb-6"></div>


                    <div>
                        <div class="border border-gray-200 w-full mb-6"></div>
                        <h3 class="text-2xl font-bold mb-1">Bike Description:</h3>
                        <div>
                            <div class="text-lg space-y-6">Horsepower:
                                {{$motor->horsepower}}
                            </div>
                        </div>
                        <div class="text-lg space-y-6">
                            {{$motor->description}}
                        </div>

                        <div class="text-lg my-4">
                            <i class="fa-solid ">€</i> {{$motor->price}}
                        </div>
{{--                        <div>--}}
{{--                            <button class="h-10 w-20 text-black rounded-lg bg-red-500 hover:bg-red-600">--}}
{{--                                <a href="{{ route('motor.show'), $motor->id }}">Details</a>--}}
{{--                            </button>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </card>
        </div>
    @endforeach

        {{-- <x-card class="mt-4 p-2 flex space-x-6">
          <a href="/listings/{{$listing->id}}/edit">
            <i class="fa-solid fa-pencil"></i> Edit
          </a>
          <form method="POST" action="/listings/{{$listing->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
          </form>
        </x-card> --}}
</div>


@endsection

