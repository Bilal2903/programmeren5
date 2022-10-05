@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All Database</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Horsepower</th>
                            <th>Image</th>
                            @foreach($motors as $motor)
                                <tr>
                                    <td>{{$motor->name}}</td>
                                    <td>{{$motor->price}}</td>
                                    <td>{{$motor->description}}</td>
                                    <td>{{$motor->horsepower}}</td>
                                    <td>{{$motor->image}}</td>
                                </tr>

                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

