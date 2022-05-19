<?php

namespace App\Http\Controllers;

use App\Models\Steel;
use Illuminate\Http\Request;

class SteelController extends Controller
{

    public function show(Steel $steel)
    {
        return view('materials.steel.show',[
            'steel' => $steel
        ]);
    }
}
