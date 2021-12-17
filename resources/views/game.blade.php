@extends('main')

@section('body')


<div class="game">
    <table>
        <br>
        @foreach ($speelbord as $row)
            <tr>
                @foreach ($row as $collumn)
                    <td>

                        {{$collumn}}
                    </td>
                    
                @endforeach
            </tr>
            
        @endforeach
    </table>
</div>

@endsection