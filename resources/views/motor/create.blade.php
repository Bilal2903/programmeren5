@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-md-offset-3" style="">
                    <h2 class="text-center">Make your own motor post!</h2>
                    <form action="{{ route('motor.store') }}" method="post">

                        @csrf

                        <div class="form-group" style="">
                            <label for="">Name of the bike</label>
                            <input type="text" class="form-control" name="name"
                                   placeholder="Enter the name of the bike"
                                   value="{{old('name')}}">
                            <span style="">@error('name'){{ $message }} @enderror</span>

                        </div>

                        <div class="form-group" style="">
                            <label for="">Price</label>
                            <input type="text" class="form-control" name="price"
                                   placeholder="Enter the price of the bike"
                                   value="{{old('price')}}">
                            <span style="">@error('price'){{ $message }} @enderror</span>
                        </div>

                        <div class="form-group" style="">
                            <label for="">Description</label>
                            <input type="text" class="form-control" name="description"
                                   placeholder="Enter the description of the bike"
                                   value="{{old('description')}}">
                            <span style="">@error('description'){{ $message }} @enderror</span>
                        </div>

                        <div class="form-group" style="">
                            <label for="">Horsepower</label>
                            <input type="text" class="form-control" name="horsepower"
                                   placeholder="Enter the horsepower of the bike"
                                   value="{{old('horsepower')}}">
                            <span style="">@error('horsepower'){{ $message }} @enderror</span>
                        </div>

                        <div class="form-group" style="">
                            <label for="image">Bike Image</label>
                            <input type="file" id="image" name="image">
                        </div>

                        <div class="form-group" style="">
                            <button type="submit" style="width: 100%; height: 35px" class="btn btn-primary"
                                    name="create" value="Opslaan"> Maak je motor post
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>

@endsection
