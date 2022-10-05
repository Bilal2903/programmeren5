@extends('layouts.app')

@section('content')
<section>
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
</section>
@endsection

