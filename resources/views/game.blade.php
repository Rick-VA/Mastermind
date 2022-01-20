@extends('main')

@section('body')

    <form method="POST" action="/game">
        @csrf
        
        <input type="text" id="color1" name="color1">
        <input type="text" id="color2" name="color2">
        <input type="text" id="color3" name="color3">
        <input type="text" id="color4" name="color4"> 
        <input type="submit" value="Submit">
    </form>




@endsection
