<!-- resources/views/drivers/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Панель водителя</h2>
        <p>Привет, {{ Auth::user()->name }}!</p>

        @if ($bookings->count() > 0)
            <h3>Доступные брони:</h3>
            <ul>
                @foreach ($bookings as $booking)
                    <li>
                        Место посадки: {{ $booking->from_location }} |
                        Место назначения: {{ $booking->to_location }} |
                        Время: {{ $booking->time }} |
                        Тип транспорта: {{ $booking->car_type }} |
                        Статус: {{ $booking->status }}

                        @if ($booking->status == 'pending')
                            <form action="{{ route('driver.accept.booking', $booking) }}" method="post">
                                @csrf
                                <button type="submit">Принять</button>
                            </form>

                            <form action="{{ route('driver.reject.booking', $booking) }}" method="post">
                                @csrf
                                <button type="submit">Отклонить</button>
                            </form>
                        @endif
                    </li>
                @endforeach
            </ul>
        @else
            <p>Нет доступных броней для вашего класса автомобиля.</p>
        @endif
    </div>
@endsection
