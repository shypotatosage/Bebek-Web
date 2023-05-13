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
                'phone_number' =>"082236697711",
                'password'=>"cicak",
                'role'=>"user",
            ]
        );
        User::create(
            [
                'name' => 'PATRIA',
                'email' => "tes2@gmail.com",
                'phone_number' =>"081231212",
                'password'=>"cicak",
                'role'=>"user",
            ]
        );
        User::create(
            [
                'name' => 'UCDC',
                'email' => "tes3@gmail.com",
                'phone_number' =>"08223697711",
                'password'=>"cicak",
                'role'=>"user",
            ]
        );
        User::create(
            [
                'name' => 'ISB_SU',
                'email' => "tes4@gmail.com",
                'phone_number' =>"08223697711",
                'password'=>"cicak",
                'role'=>"user",
            ]
        );
        User::create(
            [
                'name' => 'Oweekucs',
                'email' => "te5s@gmail.com",
                'phone_number' =>"082711",
                'password'=>"cicak",
                'role'=>"user",
            ]
        );
    }
}
