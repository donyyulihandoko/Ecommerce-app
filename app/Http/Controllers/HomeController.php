<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(): Response
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'admin') {
                return response()->view('admin.dashboard', [
                    'title' => 'Admin Dashboard'
                ]);
            } elseif (Auth::user()->role == 'user') {
                return response()->view('user.dashboard', [
                    'title' => 'Dashboard'
                ]);
            } else {
                return response()->view('index', [
                    'title' => 'Landing Page'
                ]);
            }
        } else {
            return response()->view('index', [
                'title' => 'Landing Page'
            ]);
        }
    }
}
