<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;

    // Les champs remplissables
    protected $fillable = [
        'surname',
        'given_names',
        'phone',
        // 'birth_date',
        // 'birth_place',
        // 'nationality',
        // 'profession',
        // 'address',
        // 'travel_motive',
        // 'coming_from',
        // 'going_to',
        'room_type',
        'room_price',
        'number_of_days',
        'total_cost',
    ];
}