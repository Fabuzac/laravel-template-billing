<?php

namespace App\Http\Controllers;

use App\Models\Wood;
use App\Models\Steel;
use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    public function index()
    {
        $woods = Wood::all();
        $steels = Steel::all();

        return view('materials.index', [
            'woods' => $woods,
            'steels' => $steels
        ]);
    }
}
