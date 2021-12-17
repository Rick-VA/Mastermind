<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller{

      public function show(Request $request){
        $orders = [];

        $orders[] = [1000,'11-11-2010',
            ['Super Mario Galaxy','Wii','49.50'],
            ['Mario Kart Wii','Wii','39.99'],
        ];
        $orders[] = [1000,'11-11-2011',
            ['Skyrim','Xbox 360','49.50'],
        ];

        if(isset($request->id)){
            $history = $orders[$request->id];
        }else{
            $history = $orders;
        }
        $total = 0;
        foreach ($history as $order){
            foreach ($orders as $part){
                if(is_array($part)){
                    $total = $part[2];
                }
            }
            $order[] = $total;
        }
        dd($history);

        return view('test');
    }
}
