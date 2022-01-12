@extends('main')

@section('body')


<div class="game">
        @foreach ($speelbord as $row)
            <p>
                @foreach ($row as $collumn)
                    <p>

                        {{$collumn}}
                    </p>
                    
                @endforeach
            </p>
            
        @endforeach
    
</div>

<div class="game">
        @foreach ($speelbord as $row)
            <p>
                @foreach ($row as $collumn)
                    <p>

                        {{$collumn}}
                    </p>
                    
                @endforeach
            </p>
            
        @endforeach
    
</div>

<div class="game">
        @foreach ($speelbord as $row)
            <p>
                @foreach ($row as $collumn)
                    <p>

                        {{$collumn}}
                    </p>
                    
                @endforeach
            </p>
            
        @endforeach
    
</div>

<div class="game">
        @foreach ($speelbord as $row)
            <p>
                @foreach ($row as $collumn)
                    <p>

                        {{$collumn}}
                    </p>
                    
                @endforeach
            </p>
            
        @endforeach
    
</div>

@endsection