<!-- resources/views/admin/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админская панель</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            color: #333333;
        }

        .booking {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #eeeeee;
            border-radius: 8px;
        }

        .booking p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Панель управления админа</h2>

        @foreach ($bookings as $booking)
            <div class="booking">
                <p><strong>ID брони:</strong> {{ $booking->id }}</p>
                <p><strong>Место посадки:</strong> {{ $booking->from_location }}</p>
                <p><strong>Место назначения:</strong> {{ $booking->to_location }}</p>
                <p><strong>Время:</strong> {{ $booking->time }}</p>
                <p><strong>Тип транспорта:</strong> {{ $booking->car_type }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
