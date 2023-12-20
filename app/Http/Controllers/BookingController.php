<?php
// app/Http/Controllers/BookingController.php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function makeBooking(Request $request)
    {
        // Логика создания брони
        $booking = new Booking([
            'user_id' => auth()->id(),
            'from_location' => $request->input('from_location'),
            'to_location' => $request->input('to_location'),
            'time' => $request->input('time'),
            'car_type' => $request->input('car_type'),
            'status' => 'pending', // или другой начальный статус
        ]);

        $booking->save();
        // Получение данных пользователя, связанных с заказом
    $user = $booking->user;

        // Дополнительная логика, если необходимо

        return redirect()->route('home')->with('success', 'Заказ успешно забронирован!');
    }
}
