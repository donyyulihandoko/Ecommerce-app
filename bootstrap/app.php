<?php

use App\Http\Middleware\AuthAdminMiddleware;
use App\Http\Middleware\AuthUserMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'isAdmin' => AuthAdminMiddleware::class,
            'isUser' => AuthUserMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {

        // Menangkap semua error data tidak ditemukan secara global
        $exceptions->render(function (ModelNotFoundException $e, Request $request) {

            // 1. Ambil segmen pertama URL (misal: 'brands', 'products', atau 'orders')
            $resource = $request->segment(1);

            // 2. Cek apakah route index-nya ada
            // Misal: jika akses /products/999, maka akan redirect ke products.index
            if ($resource && Route::has("$resource.index")) {
                return redirect()->route("$resource.index");
            }

            // 3. Fallback jika tidak punya route index (kembali ke dashboard)
            return response()->redirectToRoute('home.index');
        });
    })->create();
