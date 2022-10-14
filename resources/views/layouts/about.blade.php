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
                        <li>Zoeken & Filteren</li>
                        <li>Vrije tekst</li>
                        <li>Beveiliging</li>
                        <li>Schakelen van status</li>
                        <li>Diepere validatie</li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
