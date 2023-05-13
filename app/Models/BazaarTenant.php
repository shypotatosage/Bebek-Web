<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BazaarTenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bazaar_id',
        'name',
        'activity',
        'electricity',
        'activity_detail',
        'extra_needs',
        'mou',
        'payment_prove',
        'status'
    ];
}
