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

<<<<<<< HEAD
        echo '<table>';
            foreach ($speelbord as $row){
                echo'<tr>';
                foreach($row as $position){
                    echo'<td>';
                    if ($position === 'null'){
                        echo "Fout";
                    }
                    else{
                        echo "Goed";
                    }
                    echo '</td>';

                }
                echo '</tr>';
            }
        echo '</table>';
        

=======
>>>>>>> 49c107493d2e268a81e204b3c80211b37485f473
            return view('game')->with(['speelbord' => $speelbord]);
    }
}
