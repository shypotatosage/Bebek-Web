<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'email' => "tes@gmail.com",
                'bank_type_id' => '2',
                'phone_number' =>"082236697711",
                'bank_account_number' =>"0836697711",
                'password'=>"cicak",
                'profile_picture' =>"profile.png",
                'role'=>"user",
            ]
        );
        User::create(
            [
                'name' => 'PATRIA',
                'bank_type_id' => '1',
                'email' => "tes2@gmail.com",
                'phone_number' =>"081231212",
                'bank_account_number' =>"08697711",
                'password'=>"cicak",
                'profile_picture' =>"profile.png",
                'role'=>"user",
            ]
        );
        User::create(
            [
                'name' => 'UCDC',
                'email' => "tes3@gmail.com",
                'phone_number' =>"08223697711",
                'bank_type_id' => '3',
                'bank_account_number' =>"083669771",
                'password'=>"cicak",
                'profile_picture' =>"profile.png",
                'role'=>"user",
            ]
        );
        User::create(
            [
                'name' => 'ISB_SU',
                'email' => "tes4@gmail.com",
                'bank_type_id' => '1',
                'bank_account_number' =>"083669711",
                'phone_number' =>"697711",
                'profile_picture' =>"697711",
                'password'=>"cicak",
                'role'=>"user",
            ]
        );
        User::create(
            [
                'name' => 'Oweekucs',
                'email' => "te5s@gmail.com",
                'bank_type_id' => '1',
                'phone_number' =>"082711",
                'bank_account_number' =>"083669711",
                'password'=>"cicak",
                'profile_picture' =>"profile.png",
                'role'=>"user",
            ]
        );
    }
}
