@extends('layouts.app')

@section('content')



        <section>
            <div>
                <card class="p-10">
                    <div class="flex flex-col items-center justify-center text-center border-2">
                        <h2 class="text-2xl mb-2"> {{$user->name}} </h2>

                        <h2 class="text-2xl mb-2">{{$user->email}}</h2>

                        <div class="">{{$user->is_admin}}</div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-600">
                                <a href="{{route('user.edit', $user->id)}}">Edit</a>
                            </button>
                        </div>
                    </div>
                </card>
            </div>
        </section>
@endsection
