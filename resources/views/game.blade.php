@extends('main')

@section('body')
<div class="terug1">
    <div class="terug">
        <a href="/">
            <button class="button2">
                terug
            </button>
        </a>
    </div>


    <div class="playbox">
        <form method="POST" action="/game">
            @csrf

            <table>
                <tr>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                    <td>
                        <button class="guess"></button>
                    </td>
                </tr>



            </table>
        </form>
    </div>



    @endsection