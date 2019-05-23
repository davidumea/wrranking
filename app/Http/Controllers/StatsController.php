<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Stats;

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

    public function create()
    {
        return view('create');
    }

    /**
     * Lägger till det du fyllde i i form till databasen
     */
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'experience' => 'required',
            'kdRatio' => 'required',
            'winRatio' => 'required'
        ]);

        Stats::create([
            'name' => request('name'),
            'experience' => request('experience'),
            'kdRatio' => request('kdRatio'),
            'winRatio' => request('winRatio')
        ]);

        return redirect('/');
    }
}