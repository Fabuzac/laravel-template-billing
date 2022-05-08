<?php

namespace App\Http\Controllers;

use App\Models\Wood;
use Illuminate\Http\Request;

class WoodController extends Controller
{
    public function index()
    {
        $woods = Wood::all();

        return view('materials.wood.index', [
            'woods' => $woods
        ]);
    }

    public function show(Wood $wood)
    {
        return view('wood.show',[
            'wood' => $wood
        ]);
    }
}
