@extends('layouts.app')

@section('content')
<form action="">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
        <div class="absolute top-4 left-3">
            <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
        </div>
        <input type="text"
               name="search"
               class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow
           focus:outline-none"
               placeholder="Search Laravel Gigs..."
        />
        <div class="absolute top-2 right-2">
            <button
                type="submit"
                class="h-10 w-20 text-black rounded-lg bg-red-500
            hover:bg-red-600"
            >   Search
            </button>
        </div>
    </div>
</form>

<h1>Overzicht van de data</h1>

<table class="table" style="max-width: 100%">
    <th scope ="col">id</th>
    <th scope ="col">Name</th>
    <th scope ="col">Price</th>
    <th scope ="col">Description</th>
    <th scope ="col">Horsepower</th>
    <th scope ="col">Image</th>
    <th scope ="col">Actions</th>

    @foreach($motors as $motor)
        <tr>
            <td>{{$motor->id}}</td>
            <td>{{$motor->name}}</td>
            <td>{{$motor->price}}</td>
            <td>{{$motor->description}}</td>
            <td>{{$motor->horsepower}}</td>
            <td>{{$motor->image}}</td>


            @if(Auth::user())
                <td>
                    <div class="btn-groep">
                        <a href="edit/{{$motor->id}}" class="btn btn-success" style="margin-right: 20px">Edit</a>
                        <a href="detail/{{$motor->id}}" class="btn btn-info" style="margin-right: 20px"> Details</a>
{{--                        <a href="delete/{{$motor->id}}" class="btn btn-danger">Delete</a>--}}
                        <form action="{{ route('motor.destroy', $motor->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </td>
            @endif
        </tr>
    @endforeach
</table>

<a href="{{ route('motor.create') }}"> Create a motor post</a>

@endsection

