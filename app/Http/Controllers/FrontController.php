<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontController extends Controller
{
    public function index()
    {
        return Inertia('landing');
    }

    public function coba()
    {
        return Inertia('genre');
    }
}
