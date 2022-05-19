<?php

namespace App\Http\Controllers;

use App\Models\Wood;
use Illuminate\Http\Request;

class WoodController extends Controller
{
    
    public function show(Wood $wood)
    {
        return view('materials.wood.show',[
            'wood' => $wood
        ]);
    }
}
