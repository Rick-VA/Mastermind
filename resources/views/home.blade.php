@extends('layouts.app')


@section('content')
<nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="welkom">
        mastermind online
    </div>
</nav>
<a href="/play">
    <div class="playbox">
        Play
        <div class="play">
            <div class="playbutton">
            </div>
        </div>
    </div>
</a>
@endsection