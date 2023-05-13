<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bazaar extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'location',
        'price_estimation',
        'starts_from',
        'ends_at',
        'syarat_ketentuan',
        'slot',
        'logo',
    ];
}
