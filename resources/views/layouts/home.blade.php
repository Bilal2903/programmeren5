@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Home') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p>Welkom op de bike page. Als je zelf een mooie motor hebt, plaats het
                           gerust op de site zodat we het allemaal kunnen bewonderen.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
