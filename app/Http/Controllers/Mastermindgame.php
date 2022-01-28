<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mastermindgame extends Controller
{
    public function game(Request $request)
    {

        // the answer
        if (!session()->has('code')) {
            $colors = ['red', 'blue', 'green', 'yellow', 'purple'];
            $answer = [$colors[random_int(0, 4)], $colors[random_int(0, 4)], $colors[random_int(0, 4)], $colors[random_int(0, 4)]];



            // playboard, use /game in form to use it in the blade
            $board = [];
            $check = [];

            for ($i = 1; $i <= 8; $i++) {
                $board[$i] = [
                    'leeg',
                    'leeg',
                    'leeg',
                    'leeg',
                ];
                $check[$i] =  [
                    'leeg',
                    'leeg',
                    'leeg',
                    'leeg',
                ];
            }
            session()->put('code', $answer);
            session()->put('check', $check);
            session()->put('board', $board);
            session()->put('position', 0);
            session()->put('row', 1);
        }

        $board = session()->get('board');

        return view('game')->with(['board' => $board,'check'=>session()->get('check')]);
    }



    public function check(Request $request)
    {
        $board = session()->get('board');
        $position = session()->get('position');
        $row = session()->get('row');

        foreach ($request->check as $color => $value) {
           
            $board[$row][$position] = $color;
            $position++;
            if ($position == 4) {
                    
                $position = 0;
                $this->checkRow( $row,$board[$row]);
                $row++;
        }
            if ($row == 9) {
                session()->forget('code');
                if (!session()->has('code'))
                    return ('game over');
            };


            session()->put('position', $position);
            session()->put('board', $board);
            session()->put('row', $row);
        }



        return view('game')->with(['board' => $board,'check'=> session()->get('check')]);
    }

    public function checkRow($row,$bord){
        $code = session()->get('code');
        $check = session()->get('check');
        foreach($bord as $index => $color){
       
            if ($code[$index] === $color){
                $check[$row][$index] = 'good';
                unset($code[$index]);
            }
        }
        foreach($bord as  $color){
            if ($index = array_search($color,$code)){
                $check[$row][$index] = 'found';
                unset($code[$index]);
            }
        }
        session()->put('check',$check);
      

    }
}

// foreach($board as $key => $guess){
//     foreach($guess as $guesskey => $color){
//         if($color == $answer[$guesskey]){
//             echo "goed"."<br>";
//         }
//         // checks if the guess is in the right position
//         else{
//             if (in_array($color, $answer)){
//                 echo "gevonden"."<br>";
//             }
//             else{
//                 echo 'fout';
//             }
//         }
//     } 
// }
