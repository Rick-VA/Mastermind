<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mastermindgame extends Controller
{
    public function layout()
    {
        // begin of the array
        $speelbord = [];

        for ($aantal = 0; $aantal < 10; $aantal++) {

            // array with 4 items
            $speelbord[$aantal] = [null, null, null, null];
        }

        $speelbord[0][0] = rand(0,4);

            return view('game')->with(['speelbord' => $speelbord]);
    }
}
