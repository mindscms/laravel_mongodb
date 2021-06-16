<?php

namespace Database\Seeders;

use App\Models\Son;
use App\Models\User;
use Illuminate\Database\Seeder;

class SonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sami = User::where('name', 'Sami')->first()->id;

        Son::create([
            'user_id' => $sami,
            'name' => 'Mansour',
            'birth_date' => '1980-01-01',
        ]);
        Son::create([
            'user_id' => $sami,
            'name' => 'Waleed',
            'birth_date' => '1982-01-01',
        ]);

        $waleed = User::where('name', 'Waleed')->first()->id;

        Son::create([
            'user_id' => $waleed,
            'name' => 'Khaled',
            'birth_date' => '1983-01-01',
        ]);
        Son::create([
            'user_id' => $waleed,
            'name' => 'Mustafa',
            'birth_date' => '1984-01-01',
        ]);
    }
}
