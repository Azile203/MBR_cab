<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #FFFFFF; /* Белый текст */
            background-color: #000000; /* Черный фон */
        }

       header {
            background-image: url('background_image.avif'); /* Путь к вашему изображению */
            background-size: cover;
            background-position: center;
            color: #FFFFFF; /* Белый текст */
            text-align: center;
            padding: 100px 20px; /* Увеличенный верхний и нижний внутренний отступ */
            margin-bottom: 20px;
            transition: text-shadow 0.3s;
        }

        h1 {
        font-size: 90px; /* Увеличенный размер шрифта для заголовка */
        margin-bottom: 20px;
          }

           .subheading {
        font-size: 25px; /* Размер шрифта для подзаголовка */
        margin-bottom: 10px; /* Отступ между подзаголовком и описанием */
         }

         .header-buttons {
             position: absolute;
            top: 20px;
            left: 20px;
             z-index: 1; /* Добавляем z-index, чтобы кнопки были над фоновой картиной */
        }

        }

        .header-buttons a {
            margin-right: 20px;
        }

        h1 {
            font-size: 90px; /* Увеличенный размер шрифта для заголовка */
            margin-bottom: 20px;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #101010; /* Черный фон */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            color: #FFFFFF; /* Белый текст */
        }

        h2 {
            color: #FFFFFF; /* Белый текст */
            margin-bottom: 10px;
            transition: transform 0.3s, text-shadow 0.3s;
        }

        h2:hover {
            transform: scale(1.1);
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* Тень при наведении */
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-size: 18px; /* Увеличенный размер шрифта для меток в форме */
            margin-top: 10px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #FFFFFF; /* Белый цвет */
            border-radius: 8px;
            background-color: #000000; /* Черный фон */
            color: #FFFFFF; /* Белый текст */
        }

        button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 8px;
            background-color: #FFFFFF; /* Белый фон */
            color: #000000; /* Черный текст */
            font-size: 20px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        button:hover {
            background-color: #333333; /* Темно-серый при наведении */
            transform: scale(1.05);
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #FFFFFF; /* Белый текст */
            font-size: 18px;
            transition: color 0.3s;
        }

        a:hover {
            color: #CCCCCC; /* Светло-серый при наведении */
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .button-container a {
            text-decoration: none;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #000000; /* Черный фон */
            color: #FFFFFF; /* Белый текст */
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .button:hover {
            transform: scale(1.1);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Тень при наведении */
        }
        .tariffs-info {
        background-color: #001f3f; /* Темно-синий фон */
        color: #FFFFFF; /* Белый текст */
        padding: 20px;
    }
    .system-info,
    .tariffs-info {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #101010; /* Черный фон */
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        color: #FFFFFF; /* Белый текст */
    }

    .system-info h2,
    .tariffs-info h2 {
        color: #FFFFFF; /* Белый текст */
    }

    .car-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 20px;
        border: 1px solid #000000; /* Черный цвет */
        border-radius: 8px;
        padding: 15px;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .car-info:hover {
        transform: scale(1.1);
    }

    .car-info img {
        max-width: 120px; /* Уменьшенный размер изображения */
        border-radius: 8px;
    }

    .car-details {
        max-width: 400px;
        text-align: center;
    }

    .tariff-description {
        font-size: 18px; /* Увеличенный размер шрифта для описания тарифов */
        margin-top: 10px;
    }

    .driver-info {
        max-width: 400px;
        margin: 20px auto;
        padding: 20px;
        background-color: #101010; /* Черный фон */
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        color: #FFFFFF; /* Белый текст */
        text-align: center;
    }

    .driver-info h2 {
        color: #FFFFFF; /* Белый текст */
        margin-bottom: 10px;
        transition: transform 0.3s, text-shadow 0.3s;
    }

    .driver-info h2:hover {
        transform: scale(1.1);
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* Тень при наведении */
    }

    .driver-info p {
        font-size: 18px;
        margin-bottom: 15px;
    }

    .driver-info button {
        width: 100%;
        padding: 15px;
        border: none;
        border-radius: 8px;
        background-color: #FFFFFF; /* Белый фон */
        color: #000000; /* Черный текст */
        font-size: 20px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
        position: relative;
        overflow: hidden;
    }

    .driver-info button:hover {
        background-color: #333333; /* Темно-серый при наведении */
        transform: scale(1.05);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Тень при наведении */
    }

    .driver-info button::before {
        content: '\2192'; /* Код стрелки в UNICODE */
        margin-left: 10px;
    }


        footer {
            text-align: center;
            padding: 20px;
        }
    </style>
    <title>Ваше такси</title>
</head>


<body>
    <header>

     <div class="header-buttons">
        <a href="{{ route('register') }}" class="button">Регистрация для клиента</a>
        <a href="{{ route('driver.register') }}" class="button">Регистрация для водителя</a>
    </div>

        <h1>RideEasy</h1>
        <p class="subheading">Онлайн-сервис вызова такси.</p>
        <p class="description">Перемещайся по городу с комфортом.</p>
    </header>

    <section>
        <h2>Бронирование такси</h2>
        <form action="{{ route('make.booking') }}" method="post">
            @csrf
            <label for="from_location">Место посадки:</label>
            <input type="text" name="from_location" required>

            <label for="to_location">Место назначения:</label>
            <input type="text" name="to_location" required>

            <label for="time">Время:</label>
            <input type="datetime-local" name="time" required>

            <label for="car_type">Тип транспорта:</label>
            <select name="car_type" required>
                <option value="standard">Стандарт</option>
                <option value="luxury">Люкс</option>
                <!-- Другие опции -->
            </select>

            <button type="submit">Забронировать</button>
        </form>
    </section>

<div class="tariffs-info">
        <h2>Информация о тарифах</h2>

        <div class="car-info">
            <img src="{{ asset('standard_car.png') }}" alt="Стандартный автомобиль">
            <div class="car-details">
                <h3>Тариф "Стандарт" - от 68 сом</h3>
                <p class="tariff-description">
                    Просторный автомобиль для вашего комфорта. Идеальный выбор для одного или двух пассажиров.
                    Обеспечивает стандартный уровень комфорта и безопасности.
                    Бесплатное ожидание — 4 мин, Платное ожидание — 3 сом/мин, Поездки по городу — 6 сом/км,
                    Стоимость времени в пути — 3 сом/мин.
                </p>
            </div>
        </div>

        <div class="car-info">
            <img src="{{ asset('comfort_car.jpeg') }}" alt="Комфортный автомобиль">
            <div class="car-details">
                <h3>Тариф "Люкс" - от 78 сом</h3>
                <p class="tariff-description">
                    Просторный комфортабельный автомобиль для вашего уюта. Идеальный выбор для одного или двух пассажиров, предоставляющий повышенный уровень комфорта и безопасности.
                    Бесплатное ожидание — 4 мин, Платное ожидание — 4 сом/мин, Поездки по городу — 7 сом/км,
                    Стоимость времени в пути — 4 сом/мин.
                </p>
            </div>
        </div>
    </div>

    <!-- Информация для водителей -->
    <div class="driver-info">
        <h2>Для водителей RideEasy</h2>
        <p>Получайте массу выгодных заказов и зарабатывайте в любое время суток. Зарегистрируйтесь, пройдите модерацию и начинайте зарабатывать.</p>
        <a href="#">
  <button>Подробнее</button>
</a>
    </div>


    <footer>
        <p>© 2023 Ваше такси. Все права защищены.</p>
    </footer>
</body>

</html>
