@extends('layouts.app')

@section('content')

<h1 class="title text-3xl font-bold mb-2 m-3 p-3"> All Motor Bikes</h1>

<div class="row mb-2 m-3">
    <div class="p-3">
        <button class="btn btn-outline-secondary">
            <a href="{{ route('motor.create') }}" style="--bs-link-hover-color: white"> Create a motor post </a>
        </button>
    </div>
</div>

<form method="GET" action="{{ route('search.index') }}">
    @csrf
    <div class="relative border-2 border-gray-100 m-4 rounded-lg" style="width: 40%">
        <div class="absolute top-4 left-3">
            <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
        </div>
        <input type="text"
               name="search"
               class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
               placeholder="Search Motor posts..."
               value="{{ request('search') }}"
        />

        <div class="absolute top-2 right-2">
            <button
                type="submit"
                class="btn btn-outline-danger"> Search
            </button>
        </div>
    </div>
</form>

{{--Filter buttons--}}
<div style="padding-left: 2vw">
    @foreach($categories as $category)
        <button>
            <a href="{{route ('search.index', ['category' => $category->id])}}"
               type="button"
               class="btn btn-outline-info">{{$category->name}}
            </a>
        </button>
    @endforeach
</div>



<div class="lg:grid lg:grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-4">

    @foreach($motors as $motor)
        <div class="mx-4">
            <card class="p-10">
                <div class="flex flex-col items-center justify-center text-center border-2" style="background-color: #AFC5A6">
                    <h3 class="text-2xl mb-2">
                        {{$motor->name}}
                    </h3>
                    <div class="border border-gray-200 w-full mb-6"></div>

                    <img src="{{ asset("images/$motor->image") }}" style="width: 350px; height: 340px; padding-bottom: 20px"/>
                    <div class="border border-gray-200 w-full mb-6"></div>

                    <div>
                        <h3 class="text-2xl font-bold mb-1">Bike Description:</h3>

                        <div class="text-lg space-y-6 my-4">
                            {{$motor->description}}
                        </div>

                        <div>
                            <div class="text-lg my-4">Horsepower:
                                {{$motor->horsepower}}
                            </div>
                        </div>
                        <div class="text-lg my-4">
                            <i class="fa-solid ">€</i> {{$motor->price}}
                        </div>

                    </div>
                </div>
            </card>
        </div>
    @endforeach
</div>


@endsection

