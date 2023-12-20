<?php
// app/Models/Driver.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'contact_number',
        'car_number',
        'car_class',
        // Другие данные о водителе
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

