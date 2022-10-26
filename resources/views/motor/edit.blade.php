@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-md-offset-3" style="">
                    <h2 class="text-center text-3xl font-bold mb-4">Edit your own motor post!</h2>
                    <form action="{{ route('motor.update', $details->id) }}" method="post">


                        @csrf
                        @method('PUT')


                        <div class="form-group" style="">
                            <label for="">Name of the bike</label>
                            <input type="text" class="form-control" name="name"
                                   placeholder="Enter the new name of the bike"
                                   value="{{old('name', $details -> name)}}">
                            <span style="">@error('name'){{ $message }} @enderror</span>

                        </div>

                        <div class="form-group" style="">
                            <label for="">Price</label>
                            <input type="text" class="form-control" name="price"
                                   placeholder="Enter the new price of the bike"
                                   value="{{old('price', $details -> price)}}">
                            <span style="">@error('price'){{ $message }} @enderror</span>
                        </div>

                        <div class="form-group" style="">
                            <label for="">Description</label>
                            <input type="text" class="form-control" name="description"
                                   placeholder="Enter the new description of the bike"
                                   value="{{old('description', $details -> description)}}">
                            <span style="">@error('description'){{ $message }} @enderror</span>
                        </div>

                        <div class="form-group" style="">
                            <label for="">Horsepower</label>
                            <input type="text" class="form-control" name="horsepower"
                                   placeholder="Enter the new horsepower of the bike"
                                   value="{{old('horsepower', $details -> horsepower)}}">
                            <span style="">@error('horsepower'){{ $message }} @enderror</span>
                        </div>

                        <div class="mb-6">
                            <div class="form-group m-2" style="">
                                <label for="image">Bike Image:</label>
                                <input type="file" id="image" name="image"
                                       value="{{old('image', $details -> image)}}">
                                <span class="text-red-500 text-xs mt-1"> @error('image'){{ $message }} @enderror</span>
                            </div>

                            {{--Aprilla RS 660--}}
                            {{--Honda CBR1000RR--}}
                            {{--Kawasaki H2R--}}

                            {{--BMW S1000RR--}}
                            {{--Ducati Panigale V2--}}
                            {{--Suzuki GSX R1000R--}}

                            {{--Yamaha MT-07--}}
                            {{--Yamaha MT-10--}}
                            {{--Yamaha R1--}}

                            <div class="form-group" style="">
                                <button type="submit" style="width: 100%; height: 35px" class="btn btn-primary btn btn-primary bg-blue-500 hover:bg-blue-600"
                                        name="create" value="Opslaan"> Edit je motor post
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
