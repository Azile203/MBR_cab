<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
{
    // Предположим, что у вас есть модель для бронирований, например, Booking
    $bookings = Booking::all(); // Получаем все брони

    return view('admin.dashboard', compact('bookings'));
}
}
