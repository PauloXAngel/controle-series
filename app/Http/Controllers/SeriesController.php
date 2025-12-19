<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        
        $series = [
            'Breaking Bad',
            'Game of Thrones',
            'Stranger Things',
            'The Crown',
            'The Mandalorian'
        ];
        return view('listar-series', compact('series'));
    }
}

// conhecendo o blade