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
    //     Schema::create('hotel_forms', function (Blueprint $table) {
    //         $table->id();
    //         $table->timestamps();
    //     });
    // }
    public function up()
    {
        Schema::create('hotel_forms', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('given_names');
            $table->string('phone');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('nationality');
            $table->string('profession');
            $table->string('address');
            $table->string('travel_motive');
            $table->string('coming_from');
            $table->string('going_to');
            $table->string('room_number');
            $table->date('arrival_date');
            $table->date('departure_date');
            $table->string('id_number');
            $table->date('id_issued_on');
            $table->string('id_issued_at');
            $table->string('visa_number');
            $table->date('visa_issued_on');
            $table->string('visa_issued_at');
            $table->string('emergency_contact');
            $table->string('signature');
            $table->string('receptionist_name');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_forms');
    }
};
