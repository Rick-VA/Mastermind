@extends('main')

@section('body')

    <form method="POST" action="/game">
        @csrf
        <input type="submit" value="Submit">
        <input type="text" id="color1" name="color1"> <br>
        <input type="text" id="color2" name="color2"> <br>
        <input type="text" id="color3" name="color3"> <br>
        <input type="text" id="color4" name="color4"> <br>
    </form>




@endsection
