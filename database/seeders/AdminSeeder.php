<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('admins')->insert([
           'name' => 'Jsv Hyundai',
           'type' => 'admin',
           'mobile' => '7897770001',
           'email' => 'jsvhyundai@gmail.com',
           'password' => Hash::make('123456'),
           'status' => 1,
        ]);
    }
}
