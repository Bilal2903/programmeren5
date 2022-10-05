@extends('layouts.app')

@section('content')
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
                        <li>Vragen wat we ook al weer moesten zetten in terminal voor de database.</li>
                        <li>Mail verificatie bouwen en kijken waar de fout aan ligt.</li>
                        <li>Admin inlog systeem</li>
                        <li>nieuwe page voor gebruiker na inloggen</li>
                        <li>profile page voor gebruiker</li>
                        <li>aut zetten op admin pages</li>
                        <li>motor page nette vakken maken zoals magazine</li>
                        <li>Nav netjes maken</li>
                        <li>pictogram plaatsen naast naam gebruiker of admin</li>
                        <li>bij gebruiker in dropdown setting maken en profile</li>
                        <li>About page een beschrijving geven</li>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection