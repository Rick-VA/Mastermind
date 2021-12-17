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




<nav>


    <div class="welkom-1">
        mastermind online
    </div>
</nav>

<div class="playbox">
    <div class="play">
        <a href="/play">
            <button class="button">
                Play
            </button>
        </a>
    </div>
    <div class="uitleg-login">
        <a href="/uitleg-user">
            <img src="/images/vraag.png" alt="">
        </a>
    </div>
</div>
@endsection