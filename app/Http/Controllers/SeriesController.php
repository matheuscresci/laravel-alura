<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = [
            'Punisheeeeer',
            'Lost',
            'Grey\'s Anatomy'
        ];
        
        return view('listar-series', compact('series'));
    }
}
