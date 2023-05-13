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
        'activity',
        'activity_detail',
        'mou',
        'payment_prove',
        'status'
    ];
}
