@extends('main')

@section('body')
<nav>
    <a href="/register">Register</a>
    <a href="/login">Login</a>


    <div class="welkom-1">
        mastermind online
    </div>
</nav>

<div class="playbox">
    <div class="play">
        <a href="/game">
            <button class="button">
                Play
            </button>
        </a>
    </div>
    <div class="uitleg">
        <a href="/uitleg">
            <img src="/images/vraag.png" alt="">
        </a>
    </div>
</div>

@endsection