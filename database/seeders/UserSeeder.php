<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sami',
            'email' => 'sami@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123123123'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Waleed',
            'email' => 'waleed@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123123123'),
            'remember_token' => Str::random(10),
        ]);
    }
}
