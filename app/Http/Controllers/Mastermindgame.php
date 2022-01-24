<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mastermindgame extends Controller
{
    public function game(Request $request)
    {
        
        // the answer
        $answer = ['rood', 'blauw', 'geel', 'groen'];
        

        
        // playboard, use /game in form to use it in the blade
        $board = [
            [$request->color1],
            [$request->color2],
            [$request->color3],
            [$request->color4],
        ];


        // checks if the answer is in the guess
        foreach($board as $key => $guess){
            foreach($guess as $guesskey => $color){
                if($color == $answer[$guesskey]){
                    echo "goed"."<br>";
                }
                // checks if the guess is in the right position
                else{
                    if (in_array($color, $answer)){
                        echo "gevonden"."<br>";
                    }
                    else{
                        echo 'fout';
                    }
                }
            } 
         }
    }
}

