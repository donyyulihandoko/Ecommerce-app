<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(): Response
    {
        if (!Auth::check()) {
            return response()->view('index', [
                'title' => 'Landing Page'
            ]);
        }

        $user = $this->userService->getUserLogin();

        $view = ($user->role === 'admin') ? 'admin.dashboard' : 'user.dashboard';
        $title = ($user->role === 'admin') ? 'Admin Dashboard' : 'Dashboard';

        return response()->view($view, [
            'title' => $title,
            'user' => $user
        ]);
    }
}
