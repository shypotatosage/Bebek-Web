<?php

namespace Database\Seeders;

use App\Models\BankType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BankType::create(
            [
                'name'=>"BCA"
            ]
        );
        BankType::create(
            [
                'name'=>"BNI"
            ]
        );
        BankType::create(
            [
                'name'=>"BRI"
            ]
        );
        BankType::create(
            [
                'name'=>"NASDEM"
            ]
        );
    }
}
