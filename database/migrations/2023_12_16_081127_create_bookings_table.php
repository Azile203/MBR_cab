<?php

// database/migrations/xxxx_xx_xx_create_bookings_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
{
    Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained();
        $table->string('from_location');
        $table->string('to_location');
        $table->dateTime('time');
        $table->string('car_type');
        $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
