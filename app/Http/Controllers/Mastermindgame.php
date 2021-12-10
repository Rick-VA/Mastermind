<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mastermindgame extends Controller
{
    public function layout()
    {

        $speelbord = [
            ["null", "null", "null", "null"], ["null", "null", "null", "null"], ["null", "null", "null", "null"],
            ["null", "null", "null", "null"], ["null", "null", "null", "null"], ["null", "null", "null", "null"],
        ];

        foreach ($speelbord as $a) {

            dd($speelbord);



            return view('game');
        }
    }
}
