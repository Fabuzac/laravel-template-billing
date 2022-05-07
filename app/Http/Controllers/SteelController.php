<?php

namespace App\Http\Controllers;

use App\Models\Steel;
use Illuminate\Http\Request;

class SteelController extends Controller
{
    public function index()
    {
        $steel = Steel::all();

        return view('steel.index', [
            'steel' => $steel
        ]);
    }

    public function show(Steel $steel)
    {
        return view('steel.show',[
            'steel' => $steel
        ]);
    }
}
