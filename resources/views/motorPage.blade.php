@extends('layouts.web')
@extends('layouts.app')
@section('headTitle', $headTitle)


{{--@section('content')--}}

{{--    <h1>Motor Page</h1>--}}
{{--    <a href="/about"> About</a> <br>--}}
{{--    <a href="/"> Home Page</a> <br>--}}


{{--    <p> {{$motor}}</p>--}}

{{--@endsection--}}

@yield('content')

    <h1>{{$headTitle}}</h1>

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
