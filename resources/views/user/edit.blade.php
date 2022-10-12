@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-md-offset-3" style="">
                    <h2 class="text-center text-3xl font-bold mb-4">Edit your own account!</h2>
                    <form action="{{ route('user.update', $id) }}" method="post">

                        @csrf
                        @method('PUT')


                        <div class="form-group" style="">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name"
                                   placeholder="Enter name"
                                   value="{{old('name', $user->name)}}">
                            <span style="">@error('name'){{ $message }} @enderror</span>

                        </div>

                        <div class="form-group" style="">
                            <label for="">E-mail</label>
                            <input type="text" class="form-control" name="email"
                                   placeholder="Enter email"
                                   value="{{old('email', $user->email)}}">
                            <span style="">@error('email'){{ $message }} @enderror</span>
                        </div>

                        <div class="form-group" style="">
                            <button type="submit" style="width: 100%; height: 35px"
                                    class="btn btn-primary btn btn-primary bg-blue-500 hover:bg-blue-600"
                                    name="create" value="Opslaan"> Edit je account
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
