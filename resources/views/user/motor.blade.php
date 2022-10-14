@extends('layouts.app')

@section('content')

    <h3 class="text-3xl font-bold mb-4"></h3>

    <table class="table" style="max-width: 100%">

        <th scope ="col">Name</th>
        <th scope ="col">Price</th>
        <th scope ="col">Description</th>
        <th scope ="col">Horsepower</th>
        <th scope ="col">Tags</th>
        <th scope ="col">Image</th>

        @foreach($motors as $motor)
            <tr>
                <td>{{$motor->name}}</td>
                <td>{{$motor->price}}</td>
                <td>{{$motor->description}}</td>
                <td>{{$motor->horsepower}}</td>
                <td>{{$motor->tags}}</td>
                <td>{{$motor->image}}</td>
            </tr>
        @endforeach
    </table>
@endsection
