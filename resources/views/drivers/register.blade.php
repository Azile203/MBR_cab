<!-- resources/views/drivers/register.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Регистрация водителя</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('driver.register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="contact_number">Контактный номер</label>
                                <input type="text" name="contact_number" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="car_number">Номер автомобиля</label>
                                <input type="text" name="car_number" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="car_class">Класс автомобиля</label>
                                <input type="text" name="car_class" class="form-control" required>
                            </div>

                            <!-- Другие поля по необходимости -->

                            <button type="submit" class="btn btn-primary">Зарегистрироваться водителем</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
