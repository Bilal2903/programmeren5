@extends('layouts.app')

@section('content')

    <h3 class="text-3xl font-bold mb-4">Overzicht van de Users</h3>

    <table class="table" style="max-width: 100%">
        <th scope ="col">id</th>
        <th scope ="col">Name</th>
        <th scope ="col">Email</th>
        <th scope ="col">Is admin</th>


        <th scope ="col">Edit</th>
        <th scope ="col">Detail</th>
        <th scope ="col">Delete</th>


        @foreach($users as $users)
            <tr>
                <td>{{$users->id}}</td>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>{{$users->is_admin}}</td>


                <div class="btn-groep">
                    <td><a href="{{ route('user.edit', $users->id)}}" class="btn btn-success" style="margin-right: 20px">Edit</a></td>
                    <td><a href="{{ route('user.show', $users->id) }}" class="btn btn-info" style="margin-right: 20px"> Details</a></td>
                    <td>
                        <form action="{{ route('motor.destroy', $users->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="h-10 w-20 text-black rounded-lg bg-red-500 hover:bg-red-600" style="margin-right: 20px"  type="submit">Delete</button>
                        </form>
                    </td>
                </div>

            </tr>
        @endforeach
    </table>

@endsection

