<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Mostrar la landing page.
     */
    public function index()
    {
        return view('landing');
    }
}
