<?php

namespace App\Http\Controllers;

use App\Models\Wood;
use Illuminate\Http\Request;

class WoodController extends Controller
{
    public function index()
    {
        $wood = Wood::all();

        return view('wood.index', [
            'wood' => $wood
        ]);
    }

    public function show(Wood $wood)
    {
        return view('wood.show',[
            'wood' => $wood
        ]);
    }
}
