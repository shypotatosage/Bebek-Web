<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bazaar extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'location',
        'price_estimation',
        'starts_from',
        'ends_at',
        'syarat_ketentuan',
        'slot',
        'logo',
        'payment'
    ];

    public function bazaar_tenants(){
        return $this->hasMany(BazaarTenant::class);
    }
}
