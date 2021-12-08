<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mastermindgame extends Controller
{
    public function layout()
    {

        $speelbord = [['', '', '', ''], ['', '', '', ''], ['', '', '', ''], ['', '', '', ''], ['', '', '', ''], ['', '', '', ''],];

        foreach ($speelbord as $a)

        var_dump($a);


        return view('game');
    }
}
