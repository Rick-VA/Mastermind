@extends('main')

@section('body')

<nav>
<div class="terug1">
    <div class="terug">
        <a href="/">
            <button class="button2">
                terug
            </button>
        </a>
    </div>

    <br>

    <div class="logo">
        mastermind online
    </div>
</nav>

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

            <table method="post" action="/game" class="answer">
                <tr>
                    <td class="answer1">
                        <button class="blue" ></button>
                    </td>
                    <td class="answer1">
                        <button class="red" ></button>
                    </td>
                    <td class="answer1">
                        <button class="green" ></button>
                    </td>
                    <td class="answer1">
                        <button  class="yellow" ></button>
                    </td>
                    <td class="answer1">
                        <button class="purple" ></button>
                    </td>
                </tr>

                <input type="submit" value="Check" class="check">
            </table>
        </form>
    </div>



    @endsection