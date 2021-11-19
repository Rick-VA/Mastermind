@extends('main')

@section('body')
<nav>
    <a href="/register">Signup</a>
    <a href="/login">Login</a>


    <div class="welkom-1">
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