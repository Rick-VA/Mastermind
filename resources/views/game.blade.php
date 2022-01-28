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


<div class="antwoord">
    {{implode(session()->get('code')) }}

</div>

<div class="playbox">

    <form method="POST" action="/game">
        @csrf
        <table>
            @foreach ($board as $index => $row)
            <tr>
                @foreach ($row as $collom)
                <td class="guess {{$collom}}"></td>
                @endforeach
                <td class="">
                @foreach($check[$index] as $ponn)
                  {{$ponn}}
                @endforeach
                </td>
            </tr>
            @endforeach



        </table>

        <table method="post" action="/game" class="answer">
            <tr>
                <td class="answer1">
                    <input type="submit" value='blue' class="blue" name="check[blue]" />
                </td>
                <td class="answer1">
                    <input type="submit" value='red' class="red" name="check[red]" />
                </td>
                <td class="answer1">
                    <input type="submit" value='green' class="green" name="check[green]" />
                </td>
                <td class="answer1">
                    <input type="submit" value='yellow' class="yellow" name="check[yellow]" />
                </td>
                <td class="answer1">
                    <input type="submit" value='purple' class="purple" name="check[purple]" />
                </td>
            </tr>

        </table>
    </form>
</div>



@endsection