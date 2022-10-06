@extends('layouts.app')

@section('content')

<h1>Overzicht van de data</h1>

<table class="table" style="max-width: 100%">
    <th scope ="col">Name</th>
    <th scope ="col">Price</th>
    <th scope ="col">Description</th>
    <th scope ="col">Horsepower</th>
    <th scope ="col">Image</th>
    <th scope ="col">Actions</th>

    @foreach($motors as $motor)
        <tr>
            <td>{{$motor->name}}</td>
            <td>{{$motor->price}}</td>
            <td>{{$motor->description}}</td>
            <td>{{$motor->horsepower}}</td>
            <td>{{$motor->image}}</td>


            <td>
                <div class="btn-groep">
                    <a href="edit/{{$motor->id}}" class="btn btn-success" style="margin-right: 20px">Edit</a>
                    <a href="detail/{{$motor->id}}" class="btn btn-info" style="margin-right: 20px"> Details</a>
                    <a href="delete/{{$motor->id}}" class="btn btn-danger">Delete</a>
                </div>
            </td>

        </tr>
    @endforeach
</table>

<a href="{{ route('motor.create') }}"> Create a motor post</a>

@endsection

