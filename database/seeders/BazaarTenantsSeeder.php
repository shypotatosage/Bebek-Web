<?php

namespace Database\Seeders;

use App\Models\BazaarTenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BazaarTenantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BazaarTenant::create(
            [
                'user_id' => 2,
                'bazaar_id'=> 1,
                'activity'=>"activity",
                'activity_detail'=>"detail activity",
                'mou'=>"mou.png",
                'payment_prove'=>"payment_prove.png",
                'status' => "pending",
            ]
        );
        BazaarTenant::create(
            [
                'user_id' => 1,
                'bazaar_id'=> 3,
                'activity'=>"activity",
                'activity_detail'=>"detail activity",
                'mou'=>"mou.png",
                'payment_prove'=>"payment_prove.png",
                'status' => "pending",
            ]
        );
        BazaarTenant::create(
            [
                'user_id' => 1,
                'bazaar_id'=> 4,
                'activity'=>"activity",
                'activity_detail'=>"detail activity",
                'mou'=>"mou.png",
                'payment_prove'=>"payment_prove.png",
                'status' => "pending",
            ]
        );
        BazaarTenant::create(
            [
                'user_id' => 1,
                'bazaar_id'=> 2,
                'activity'=>"activity",
                'activity_detail'=>"detail activity",
                'mou'=>"mou.png",
                'payment_prove'=>"payment_prove.png",
                'status' => "pending",
            ]
        );
        BazaarTenant::create(
            [
                'user_id' => 1,
                'bazaar_id'=> 2,
                'activity'=>"activity",
                'activity_detail'=>"detail activity",
                'mou'=>"mou.png",
                'payment_prove'=>"payment_prove.png",
                'status' => "pending",
            ]
        );
        BazaarTenant::create(
            [
                'user_id' => 3,
                'bazaar_id'=> 1,
                'activity'=>"activity",
                'activity_detail'=>"detail activity",
                'mou'=>"mou.png",
                'payment_prove'=>"payment_prove.png",
                'status' => "pending",
            ]
        );
        BazaarTenant::create(
            [
                'user_id' => 2,
                'bazaar_id'=> 1,
                'activity'=>"activity",
                'activity_detail'=>"detail activity",
                'mou'=>"mou.png",
                'payment_prove'=>"payment_prove.png",
                'status' => "pending",
            ]
        );
    }
}
