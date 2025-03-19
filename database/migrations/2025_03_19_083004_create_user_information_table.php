<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('user_information', function (Blueprint $table) {
    //         $table->id();
    //         $table->timestamps();
    //     });
    // }
    public function up()
    {
        Schema::create('user_information', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('given_names');
            $table->string('phone');
            // $table->date('birth_date');
            // $table->string('birth_place');
            // $table->string('nationality');
            // $table->string('profession');
            // $table->string('address');
            // $table->string('travel_motive');
            // $table->string('coming_from');
            // $table->string('going_to');
            $table->string('room_type');
            $table->decimal('room_price', 8, 2);
            $table->integer('number_of_days');
            $table->decimal('total_cost', 10, 2);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_information');
    }
};
