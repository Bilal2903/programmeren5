@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-md-offset-3" style="">
                    <h2 class="text-center text-3xl font-bold mb-4">Make your own motor post!</h2>
                    <form action="{{ route('motor.store') }}" method="post">

                        @csrf

                        <div class="form-group" style="">
                            <label for="">Name of the bike</label>
                            <input type="text" class="form-control" name="name"
                                   placeholder="Enter the name of the bike"
                                   value="{{old('name')}}">
                            <span class="text-red-500 text-xs mt-1z">@error('name'){{ $message }} @enderror</span>

                        </div>

                        <div class="form-group" style="">
                            <label for="">Price</label>
                            <input type="text" class="form-control" name="price"
                                   placeholder="Enter the price of the bike"
                                   value="{{old('price')}}">
                            <span class="text-red-500 text-xs mt-1">@error('price'){{ $message }} @enderror</span>
                        </div>

                        <div class="form-group" style="">
                            <label for="">Description</label>
                            <input type="text" class="form-control" name="description"
                                   placeholder="Enter the description of the bike"
                                   value="{{old('description')}}">
                            <span class="text-red-500 text-xs mt-1">@error('description'){{ $message }} @enderror</span>
                        </div>

                        <div class="form-group" style="">
                            <label for="">Horsepower</label>
                            <input type="text" class="form-control" name="horsepower"
                                   placeholder="Enter the horsepower of the bike"
                                   value="{{old('horsepower')}}">
                            <span class="text-red-500 text-xs mt-1">@error('horsepower'){{ $message }} @enderror</span>
                        </div>

                        <div class="mb-6">
                            <label for="tags" class="inline-block text mb-1"> Tags (Comma Separated)</label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                                   placeholder="Example: Kawasaki, Yamaha, Honda, BMW" value="{{old('tags')}}" />

                            @error('tags')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <div class="form-group m-2" style="">
                                <label for="image">Bike Image</label>
                                <input type="file" id="image" name="image">
                            </div>

                            <div class="form-group" style="">
                                <button type="submit" style="width: 100%; height: 35px" class="btn btn-primary btn btn-primary bg-blue-500 hover:bg-blue-600"
                                        name="create" value="Opslaan"> Maak je motor post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>

@endsection
