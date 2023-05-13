<?php

namespace Database\Seeders;

use App\Models\Bazaar;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BazaarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bazaar::create(
            [
                'name' => "9th NPLC",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"500rb - 700rb",
                'starts_from'=>Carbon::create(2023, 5, 22),
                'ends_at'=>Carbon::create(2023, 5, 28),
                'syarat_ketentuan'=>"images/ketentuan_9thNPLC",
                'slot'=>7,
                'logo'=>"logo/ketentuan_9thNPLC",
                'user_id' => 5,
            ]
        );
        Bazaar::create(
            [
                'name' => "Hackfest",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"500rb - 700rb",
                'starts_from'=>Carbon::create(2023, 2, 22),
                'ends_at'=>Carbon::create(2023, 2, 28),
                'syarat_ketentuan'=>"images/ketentuan_Hackfest",
                'slot'=>7,
                'logo'=>"logo/ketentuan_Hackfest",
                'user_id' => 3,
            ]
        );
        Bazaar::create(
            [
                'name' => "Waisak",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"200rb - 400rb",
                'starts_from'=>Carbon::create(2023, 5, 22),
                'ends_at'=>Carbon::create(2023, 5, 28),
                'syarat_ketentuan'=>"images/ketentuan_Waisak",
                'slot'=>7,
                'logo'=>"logo/ketentuan_Waisak",
                'user_id' => 2,
            ]
        );
        Bazaar::create(
            [
                'name' => "Deans Cup",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"500rb - 700rb",
                'starts_from'=>Carbon::create(2021, 5, 22),
                'ends_at'=>Carbon::create(2021, 5, 28),
                'syarat_ketentuan'=>"images/ketentuan_Deanscup",
                'slot'=>7,
                'logo'=>"logo/ketentuan_Deanscup",
                'user_id' => 3,
            ]
        );
        Bazaar::create(
            [
                'name' => "Christmas",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"500rb - 700rb",
                'starts_from'=>Carbon::create(2021, 12, 20),
                'ends_at'=>Carbon::create(2021, 12, 28),
                'syarat_ketentuan'=>"images/ketentuan_Deanscup",
                'slot'=>7,
                'logo'=>"logo/ketentuan_Christmas",
                'user_id' => 4,
            ]
        );
        Bazaar::create(
            [
                'name' => "Summer Holiday",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"300rb - 600rb",
                'starts_from'=>Carbon::create(2021, 5, 22),
                'ends_at'=>Carbon::create(2021, 5, 28),
                'syarat_ketentuan'=>"images/ketentuan_SummerHoliday",
                'slot'=>7,
                'logo'=>"logo/ketentuan_SummerHoliday",
                'user_id' => 4,
            ]
        );
        Bazaar::create(
            [
                'name' => "Autumn Holiday",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"600rb - 800rb",
                'starts_from'=>Carbon::create(2021, 5, 22),
                'ends_at'=>Carbon::create(2021, 5, 28),
                'syarat_ketentuan'=>"images/ketentuan_AutumnHoliday",
                'slot'=>7,
                'logo'=>"logo/ketentuan_AutumnHoliday",
                'user_id' => 2,
            ]
        );
        Bazaar::create(
            [
                'name' => "Spring Holiday",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"600rb - 800rb",
                'starts_from'=>Carbon::create(2021, 5, 22),
                'ends_at'=>Carbon::create(2021, 5, 28),
                'syarat_ketentuan'=>"images/ketentuan_AutumnHoliday",
                'slot'=>7,
                'logo'=>"logo/ketentuan_AutumnHoliday",
                'user_id' => 2,
            ]
        );
        // 
        Bazaar::create(
            [
                'name' => "2th Coding Cup",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"500rb - 700rb",
                'starts_from'=>Carbon::create(2023, 5, 22),
                'ends_at'=>Carbon::create(2023, 5, 28),
                'syarat_ketentuan'=>"images/ketentuan_9thNPLC",
                'slot'=>7,
                'logo'=>"logo/ketentuan_9thNPLC",
                'user_id' => 3,
            ]
        );
        Bazaar::create(
            [
                'name' => "10th Hackfest",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"500rb - 700rb",
                'starts_from'=>Carbon::create(2023, 2, 22),
                'ends_at'=>Carbon::create(2023, 2, 28),
                'syarat_ketentuan'=>"images/ketentuan_Hackfest",
                'slot'=>7,
                'logo'=>"logo/ketentuan_Hackfest",
                'user_id' => 5,
            ]
        );
        Bazaar::create(
            [
                'name' => "Easter Party",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"200rb - 400rb",
                'starts_from'=>Carbon::create(2023, 5, 22),
                'ends_at'=>Carbon::create(2023, 5, 28),
                'syarat_ketentuan'=>"images/ketentuan_Waisak",
                'slot'=>7,
                'logo'=>"logo/ketentuan_Waisak",
                'user_id' => 2,
            ]
        );
        Bazaar::create(
            [
                'name' => "MLBB Cup",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"500rb - 700rb",
                'starts_from'=>Carbon::create(2021, 5, 22),
                'ends_at'=>Carbon::create(2021, 5, 28),
                'syarat_ketentuan'=>"images/ketentuan_Deanscup",
                'slot'=>7,
                'logo'=>"logo/ketentuan_Deanscup",
                'user_id' => 4,
            ]
        );
        Bazaar::create(
            [
                'name' => "Valorant Cup",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"500rb - 700rb",
                'starts_from'=>Carbon::create(2021, 12, 20),
                'ends_at'=>Carbon::create(2021, 12, 28),
                'syarat_ketentuan'=>"images/ketentuan_Deanscup",
                'slot'=>7,
                'logo'=>"logo/ketentuan_Christmas",
                'user_id' => 3,
            ]
        );
        Bazaar::create(
            [
                'name' => "5th WWDC",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"300rb - 600rb",
                'starts_from'=>Carbon::create(2021, 5, 22),
                'ends_at'=>Carbon::create(2021, 5, 28),
                'syarat_ketentuan'=>"images/ketentuan_SummerHoliday",
                'slot'=>7,
                'logo'=>"logo/ketentuan_SummerHoliday",
                'user_id' => 4,
            ]
        );
        Bazaar::create(
            [
                'name' => "Hunting Ceremony",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"600rb - 800rb",
                'starts_from'=>Carbon::create(2021, 5, 22),
                'ends_at'=>Carbon::create(2021, 5, 28),
                'syarat_ketentuan'=>"images/ketentuan_AutumnHoliday",
                'slot'=>7,
                'logo'=>"logo/ketentuan_AutumnHoliday",
                'user_id' => 2,
            ]
        );
    }
}
