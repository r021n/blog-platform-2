<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PublicController extends Controller
{
    public function index(): View
    {
        return view("public.home");
    }
}
