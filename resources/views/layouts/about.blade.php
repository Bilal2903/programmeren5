@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('About') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('TODO') }}
                        <li>Paginas maken voor de CRUD die het ook echt doen</li>
                        <li>Crud functionaliteiten</li>
                        <li>Admin inlog systeem</li>
                        <li>nieuwe page voor gebruiker na inloggen</li>
                        <li>profile page voor gebruiker</li>
                        <li>aut zetten op admin pages</li>
                        <li>About page een beschrijving geven</li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
