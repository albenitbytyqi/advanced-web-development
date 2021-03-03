<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentiController extends Controller
{
    //

    public function studenti(){
        $studenti = new \App\Models\Studenti(1,"Albenit Baba","20/06/2001","M ");

        return view('studenti',[
            "studenti" =>$studenti
        ]);
    }
}
