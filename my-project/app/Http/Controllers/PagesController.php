<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function chollos() {
        $chollos = Chollo::all();
        
        return view('chollos', compact('chollos'));
    }

    
}
