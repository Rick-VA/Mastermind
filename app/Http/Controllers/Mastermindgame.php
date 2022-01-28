<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mastermindgame extends Controller
{
    public function game(Request $request)
    {

        //the answer
        if (!session()->has('code')) {

            //answer choices
            $colors = ['red', 'blue', 'green', 'yellow', 'purple'];
            // generates a random answer
            $answer = [$colors[random_int(0, 4)], $colors[random_int(0, 4)], $colors[random_int(0, 4)], $colors[random_int(0, 4)]];




            //creates the array of the board
            $board = [];
            $check = [];


            //the array of the board
            for ($i = 1; $i <= 8; $i++) {
                $board[$i] = [
                    'empty',
                    'empty',
                    'empty',
                    'empty',
                ];
                $check[$i] =  [
                    'leeg',
                    'leeg',
                    'leeg',
                    'leeg',
                ];
            }

            //the sessions
            session()->put('code', $answer);
            session()->put('check', $check);
            session()->put('board', $board);
            session()->put('position', 0);
            session()->put('row', 1);
        }

        $board = session()->get('board');

        //returns the code to the view
        return view('game')->with(['board' => $board, 'check' => session()->get('check')]);
    }



    public function check(Request $request)
    {
        $board = session()->get('board');
        $position = session()->get('position');
        $row = session()->get('row');

        //go's to next row in the board
        foreach ($request->check as $color => $value) {

            $board[$row][$position] = $color;
            $position++;
            if ($position == 4) {

                $position = 0;
                $this->checkRow($row, $board[$row]);
                $row++;
            }
            if ($row == 9) {
                session()->forget('code');
                if (!session()->has('code'))
                    return ('game over');
            };

            //sessions
            session()->put('position', $position);
            session()->put('board', $board);
            session()->put('row', $row);
        }



        return view('game')->with(['board' => $board, 'check' => session()->get('check')]);
    }

    //checks if the answers are correct
    public function checkRow($row, $bord)
    {
        $code = session()->get('code');
        $check = session()->get('check');
        foreach ($bord as $index => $color) {

            if ($code[$index] === $color) {
                $check[$row][$index] = 'goed';
                unset($code[$index]);
            }
        }
        foreach ($bord as $color) {
            if ($index = array_search($color, $code)) {
                $check[$row][$index] = 'gevonden';
                unset($code[$index]);
            }
            
        };


        
        session()->put('check', $check);
    }
}
