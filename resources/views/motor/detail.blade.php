@extends('layouts.app')

@section('content')


    <section>
        <div class="mx-4">
            <card class="p-10">
                <div class="flex flex-col items-center justify-center text-center">
                    <img class="w-48 mr-6 mb-6"{{$details->image}}>

                    <h3 class="text-2xl mb-2">
                        {{$details->name}}
                    </h3>
                    <div class="text-xl font-bold mb-4">€{{$details->price}}</div>

                    <div class="text-lg my-4">
                        <i class=""> {{$details->horsepower}} Horsepower</i>
                    </div>
                    <div class="border border-gray-200 w-full mb-6"></div>
                    <div>
                        <h3 class="text-3xl font-bold mb-4">Bike Description</h3>
                        <div class="text-lg space-y-6">
                            {{$details->description}}
                        </div>
                    </div>
                </div>
            </card>
        </div>
    </section>

@endsection
