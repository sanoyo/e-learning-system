<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sanosController extends Controller
{
    public function test()
    {
        return view('johokan.index');
    }

    // public function test()
    // {
    //     return view('sanos.index');
    // }
}
