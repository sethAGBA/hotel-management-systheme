<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelForm extends Model
{
    use HasFactory;

    // Les champs remplissables
    protected $fillable = [
        'surname',
        'given_names',
        'phone',
        'birth_date',
        'birth_place',
        'nationality',
        'profession',
        'address',
        'travel_motive',
        'coming_from',
        'going_to',
        'room_number',
        'arrival_date',
        'departure_date',
        'id_number',
        'id_issued_on',
        'id_issued_at',
        'visa_number',
        'visa_issued_on',
        'visa_issued_at',
        'emergency_contact',
        'signature',
        'receptionist_name',
    ];
}