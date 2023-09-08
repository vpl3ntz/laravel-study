<?php

namespace App\Http\Controllers;

class SeriesController extends Controller
{
    public function index()
    {
        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'
        ];
        return view('listar-series')->with('series', $series);
    }
}
