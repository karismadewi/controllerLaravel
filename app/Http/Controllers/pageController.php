<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    //
    public function input()
    {
        return view('input');
    }

    public function output(Request $request)
    {
        $a = $request->firstterm;
        $b = $request->common_difference;
        $n = $request->numberOfTerms;
        $un = $a + ($n - 1) * $b;
        $arr = array();
        for ($i = 1; $i <= $n; $i++) {
            $num = $a + ($i - 1) * $b;
            $arr[] = $num;  
        }
        // dd($request);
        $seq= implode(",", $arr);
        return view('output')
        ->with('un',$un)
        ->with('seq', $seq) ;
    }
}
