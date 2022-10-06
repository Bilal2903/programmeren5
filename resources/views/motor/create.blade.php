@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row"
        </div>


        <form action="{{ route('motor.create') }}add" method="post">
            @csrf

            <div class="forum-heading">
                <h2>Motor post aan maken</h2>
            </div>

            <div class="input-parent">
                <label for="adminEmail">Email</label>
                <input
                    id="adminEmail"
                    type="email"
                    name="adminEmail"
                    value=""
                />
            </div>

            <div class="input-parent">
                <label for="adminEmail">Email</label>
                <input
                    id="adminEmail"
                    type="email"
                    name="adminEmail"
                    value=""
                />
            </div>

            <div class="input-parent">
                <label for="adminPassword">Password</label>
                <input
                    id="adminPassword"
                    type="password"
                    name="adminPassword"
                />
                <span class="errors">Error</span>
            </div>

            <button type="submit" name="update" value="Opslaan">Opslaan</button>


        </form>



    </section>


@endsection
