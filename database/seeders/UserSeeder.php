<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            [
                'name' => 'IMT_SU',
                'email' => "imtsu123@gmail.com",
                'bank_type_id' => '2',
                'phone_number' =>"0822366979120",
                'bank_account_number' =>"083669771190",
                'password'=>Hash::make("tes123"),
                'profile_picture' =>"profile.png",
                'role'=>"Tenant",
            ]
        );
        User::create(
            [
                'name' => 'PATRIA',
                'bank_type_id' => '1',
                'email' => "patria@gmail.com",
                'phone_number' =>"081231212123",
                'bank_account_number' =>"0869771291",
                'password'=>Hash::make("tes123"),
                'profile_picture' =>"profile.png",
                'role'=>"Host",
            ]
        );
        User::create(
            [
                'name' => 'UCDC',
                'email' => "ucdc@gmail.com",
                'phone_number' =>"08225697711",
                'bank_type_id' => '3',
                'bank_account_number' =>"08366977110",
                'password'=>Hash::make("tes123"),
                'profile_picture' =>"profile.png",
                'role'=>"Host",
            ]
        );
        User::create(
            [
                'name' => 'ISB_SU',
                'email' => "isbsu@gmail.com",
                'bank_type_id' => '1',
                'bank_account_number' =>"08366971179",
                'password'=>Hash::make("tes123"),
                'phone_number' =>"697711123232",
                'profile_picture' =>"697711",
                'role'=>"Host",
            ]
        );
        User::create(
            [
                'name' => 'Oweekucs',
                'email' => "oweekucs@gmail.com",
                'bank_type_id' => '1',
                'phone_number' =>"082711",
                'bank_account_number' =>"08366971124",
                'password'=>Hash::make("tes123"),
                'profile_picture' =>"profile.png",
                'role'=>"Admin",
            ]
        );
        User::create(
            [
                'name' => 'tes1',
                'email' => "tes1@gmail.com",
                'bank_type_id' => '1',
                'phone_number' =>"082711231231",
                'bank_account_number' =>"08366971124",
                'password'=>Hash::make("tes123"),
                'profile_picture' =>"profile.png",
                'role'=>"Tenant",
            ]
        );
        User::create(
            [
                'name' => 'tes2',
                'email' => "tes2@gmail.com",
                'bank_type_id' => '1',
                'phone_number' =>"082712312312311",
                'bank_account_number' =>"08366971124",
                'password'=>Hash::make("tes123"),
                'profile_picture' =>"profile.png",
                'role'=>"Host",
            ]
        );
    }
}
