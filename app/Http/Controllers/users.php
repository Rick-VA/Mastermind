<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users extends Controller
{
  public function code()
  {
    $code = [
      ['JavaScript', '321948'],
      ['Python', '291932'], ['Java', '290900'], ['C#', '280921'], ['PHP', '203198'], ['C++', '154321'], ['C', '102342'], ['Golang', '80192'], ['Rust', '80192']
    ];

    $totaal = 0;

    foreach ($code as $users) {
      $totaal = $totaal + $users[1];
    }
    
    echo $totaal;
  }
};
