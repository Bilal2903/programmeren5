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

                       <a>Op deze website kan je alles vinden gerelateerd met motoren.
                          Ik heb een website gemaakt waar de motor fans hun eigen motoren op kunnen plaatsen.
                          Op deze manier kan iedereen de motors bewonderen en eventueel inspiratie krijgen voor hun volgende motor.
                       </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
