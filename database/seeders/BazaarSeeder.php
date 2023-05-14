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
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>7,
                'logo'=>"logo/ketentuan_SummerHoliday.jpg",
                'user_id' => 2,
            ]
        );
        Bazaar::create(
            [
                'name' => "9th NPLC",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"500rb - 700rb",
                'starts_from'=>Carbon::create(2023, 5, 22),
                'ends_at'=>Carbon::create(2023, 5, 28),
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>10,
                'logo'=>"logo/ketentuan_AutumbHoliday.jpg",
                'user_id' => 3,
            ]
        );
        Bazaar::create(
            [
                'name' => "9th NPLC",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"500rb - 700rb",
                'starts_from'=>Carbon::create(2023, 5, 22),
                'ends_at'=>Carbon::create(2023, 5, 28),
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>9,
                'logo'=>"logo/ketentuan_AutumbHoliday.jpg",
                'user_id' => 1,
            ]
        );
        Bazaar::create(
            [
                'name' => "9th NPLC",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"500rb - 700rb",
                'starts_from'=>Carbon::create(2023, 5, 22),
                'ends_at'=>Carbon::create(2023, 5, 28),
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>30,
                'logo'=>"logo/ketentuan_AutumbHoliday.jpg",
                'user_id' => 3,
            ]
        );
        Bazaar::create(
            [
                'name' => "9th NPLC",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"500rb - 700rb",
                'starts_from'=>Carbon::create(2023, 5, 22),
                'ends_at'=>Carbon::create(2023, 5, 28),
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>17,
                'logo'=>"logo/ketentuan_AutumbHoliday.jpg",
                'user_id' => 2,
            ]
        );
        Bazaar::create(
            [
                'name' => "9th NPLC",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"500rb - 700rb",
                'starts_from'=>Carbon::create(2023, 5, 22),
                'ends_at'=>Carbon::create(2023, 5, 28),
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>20,
                'logo'=>"logo/ketentuan_AutumbHoliday.jpg",
                'user_id' => 5,
            ]
        );
        Bazaar::create(
            [
                'name' => "9th NPLC",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"500rb - 700rb",
                'starts_from'=>Carbon::create(2023, 5, 22),
                'ends_at'=>Carbon::create(2023, 5, 28),
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>50,
                'logo'=>"logo/ketentuan_AutumnHoliday.jpeg",
                'user_id' => 4,
            ]
        );
        Bazaar::create(
            [
                'name' => "9th NPLC",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"500rb - 700rb",
                'starts_from'=>Carbon::create(2023, 5, 22),
                'ends_at'=>Carbon::create(2023, 5, 28),
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>7,
                'logo'=>"logo/ketentuan_SummerHoliday.jpg",
                'user_id' => 4,
            ]
        );
        Bazaar::create(
            [
                'name' => "9th NPLC",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"500rb - 700rb",
                'starts_from'=>Carbon::create(2023, 5, 22),
                'ends_at'=>Carbon::create(2023, 5, 28),
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>7,
                'logo'=>"logo/ketentuan_SummerHoliday.jpg",
                'user_id' => 4,
            ]
        );
        Bazaar::create(
            [
                'name' => "9th NPLC",
                'description'=>"asdfasdfasdf",
                'location'=>"Indonesia",
                'price_estimation'=>"500rb - 700rb",
                'starts_from'=>Carbon::create(2023, 5, 22),
                'ends_at'=>Carbon::create(2023, 5, 28),
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>7,
                'logo'=>"logo/ketentuan_SummerHoliday.jpg",
                'user_id' => 3,
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
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>7,
                'logo'=>"logo/ketentuan_AutumnHoliday.jpeg",
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
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>7,
                'logo'=>"logo/ketentuan_AutumnHoliday.jpeg",
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
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>7,
                'logo'=>"logo/ketentuan_SummerHoliday.jpg",
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
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>7,
                'logo'=>"logo/ketentuan_SummerHoliday.jpg",
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
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>7,
                'logo'=>"logo/ketentuan_AutumnHoliday.jpeg",
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
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>7,
                'logo'=>"logo/ketentuan_SummerHoliday.jpg",
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
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>7,
                'logo'=>"logo/ketentuan_SummerHoliday.jpg",
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
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>7,
                'logo'=>"logo/ketentuan_Waisak.jpg",
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
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>7,
                'logo'=>"logo/ketentuan_Waisak.jpg",
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
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>7,
                'logo'=>"logo/ketentuan_Waisak.jpg",
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
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>7,
                'logo'=>"logo/ketentuan_Deanscup.jpeg",
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
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>7,
                'logo'=>"logo/ketentuan_Deanscup.jpeg",
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
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>7,
                'logo'=>"logo/ketentuan_SummerHoliday.jpg",
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
                'syarat_ketentuan'=>"s_k/NamaLengkap_Portofolio_Academy.pdf",
                'slot'=>7,
                'logo'=>"logo/ketentuan_AutumnHoliday.jpeg",
                'user_id' => 2,
            ]
        );
    }
}
