<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Проверка, является ли текущий пользователь админом
        if (Auth::check() && Auth::user()->email === 'admin@example.com') {
            return $next($request);
        }

        // Если не админ, перенаправьте его на домашнюю страницу
        return redirect('/home');
    }
}
