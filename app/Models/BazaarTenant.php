<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function bazaar() : BelongsTo
    {
        return $this->belongsTo(Bazaar::class);
    }
}
