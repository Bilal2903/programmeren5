@extends('layouts.app')

@section('content')

<h3 class="text-3xl font-bold mb-4">Mijn motor posts</h3>

<table class="table" style="max-width: 100%">

    <th scope ="col">id</th>
    <th scope ="col">Name</th>
    <th scope ="col">Price</th>
    <th scope ="col">Description</th>
    <th scope ="col">Horsepower</th>
    <th scope ="col">Category</th>
    <th scope ="col">Image</th>

    <th scope ="col">Edit</th>
    <th scope ="col">Detail</th>
    <th scope ="col">Delete</th>
    @foreach($motors as $motor)
        <tr>
            <td>{{$motor->id}}</td>
            <td>{{$motor->name}}</td>
            <td>{{$motor->price}}</td>
            <td>{{$motor->description}}</td>
            <td>{{$motor->horsepower}}</td>
            <td>{{$motor->category->name}}</td>
            <td>{{$motor->image}}</td>


            <div class="btn-groep">
                <td><a href="{{ route('motor.edit', $motor->id)}}" class="btn btn-outline-success" style="margin-right: 20px">Edit</a></td>
                <td><a href="{{ route('motor.show', $motor->id) }}" class="btn btn-outline-info" style="margin-right: 20px"> Details</a></td>
                <td>
                    <form action="{{ route('motor.destroy', $motor->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" style="margin-right: 20px"  type="submit">Delete</button>
                    </form>
                </td>
            </div>
        </tr>
    @endforeach
</table>
@endsection

