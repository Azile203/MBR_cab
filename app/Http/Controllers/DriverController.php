<?php

// app/Http/Controllers/DriverController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;

class DriverController extends Controller
{
    public function showRegistrationForm()
    {
        return view('drivers.register');
    }

    public function register(Request $request)
    {
        // Валидация данных
        $request->validate([
            'contact_number' => 'required|string|max:255',
            'car_number' => 'required|string|max:255',
            'car_class' => 'required|string|max:255',
            // Другие правила валидации по вашему усмотрению
        ]);

        // Создание водителя
        $driver = new Driver([
            'user_id' => Auth::id(),
            'contact_number' => $request->input('contact_number'),
            'car_number' => $request->input('car_number'),
            'car_class' => $request->input('car_class'),
            // Другие данные водителя
        ]);

        $driver->save();

        // Перенаправление на dashboard водителя
        return redirect()->route('driver.dashboard')->with('success', 'Вы успешно зарегистрировались водителем!');
    }

    public function dashboard()
    {
        $driver = Auth::user()->driver;

        // Получение броней, подходящих под класс авто водителя
        $bookings = Booking::where('car_type', $driver->car_class)
            ->where('status', 'pending') // или другой начальный статус
            ->get();

        return view('drivers.dashboard', compact('driver', 'bookings'));
    }

    public function acceptBooking(Booking $booking)
    {
        // Логика принятия брони
        $booking->status = 'accepted';
        $booking->save();

        // Добавление уведомления в сессию клиента
    session()->flash('booking_accepted', true);


       return back()->with('success', 'Бронь принята!');
    }

    public function rejectBooking(Booking $booking)
    {
        // Логика отклонения брони
        $booking->status = 'rejected';
        $booking->save();

        // Дополнительная логика, если необходимо

        return redirect()->route('drivers.dashboard')->with('success', 'Бронь отклонена!');
    }
}
