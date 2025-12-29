<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): Response
    {
        return response()->view('index');
    }
}
