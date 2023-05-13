<?php

namespace Database\Seeders;

use App\Models\Bazaar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BazaarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bazaar::factory()->create();
    }
}
