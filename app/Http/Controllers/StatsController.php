<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function home()
    {
        $stats = \App\stats::all();

        return view('experience', ['stats' => $stats]);
    }
    
    public function clan()
    {
        return view('clan');
    }

    public function tournament()
    {
        $stats = \App\stats::all();

        return view('tournament', ['stats' => $stats]);
    }
    
    public function br()
    {
        return view('br');
    }
}