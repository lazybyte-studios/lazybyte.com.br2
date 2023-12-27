<?php

namespace App\Http\Controllers\Wireframe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WireframeController extends Controller
{
    public function index()
    {
        return view("temas/wireframe");
    }
}
