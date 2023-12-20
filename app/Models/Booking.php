<?php

// app/Models/Booking.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

   protected $fillable = [
        'user_id',
        'from_location',
        'to_location',
        'time',
        'car_type',
        'status',
    ];


    // Связь с моделью клиента
     public function user()
    {
        return $this->belongsTo(User::class);
    }


    // Дополнительные методы и связи
}
