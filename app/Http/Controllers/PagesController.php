<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('experience', [
            'tasks' => ['ja','nej']
        ]);
    }
    
    public function clan()
    {
        return view('clan');
    }

    public function tournament()
    {
        return view('tournament');
    }
    
    public function br()
    {
        return view('br');
    }
}
