<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
               'name' => 'Elie Valloys',
               'email' => "elievalloys@gmail.com",
               'email_verified_at' =>now(),
               'password' => Hash::make('elievalloys'),
               'created_at' => now()

            ],
            [
                'name' => 'Elie1',
                'email' => "valloys@gmail.com",
                'email_verified_at' =>now(),
                'password' => Hash::make('valloys'),
                'created_at' => now()
             ]
            ]);
    }
}
