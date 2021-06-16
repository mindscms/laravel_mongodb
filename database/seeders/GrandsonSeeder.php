<?php

namespace Database\Seeders;

use App\Models\Grandson;
use App\Models\Son;
use Illuminate\Database\Seeder;

class GrandsonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mansour_sami = Son::where('name', 'Mansour')->first()->id;

        Grandson::create([
            'son_id' => $mansour_sami,
            'name' => 'Sami',
            'birth_date' => '2000-01-01',
        ]);
        Grandson::create([
            'son_id' => $mansour_sami,
            'name' => 'Omar',
            'birth_date' => '2001-01-01',
        ]);
        Grandson::create([
            'son_id' => $mansour_sami,
            'name' => 'Hussain',
            'birth_date' => '2002-01-01',
        ]);
        Grandson::create([
            'son_id' => $mansour_sami,
            'name' => 'Ali',
            'birth_date' => '2003-01-01',
        ]);

        $waleed_sami = Son::where('name', 'Waleed')->first()->id;

        Grandson::create([
            'son_id' => $waleed_sami,
            'name' => 'Mamdouh',
            'birth_date' => '2001-01-01',
        ]);
        Grandson::create([
            'son_id' => $waleed_sami,
            'name' => 'Mahmoud',
            'birth_date' => '2002-01-01',
        ]);
        Grandson::create([
            'son_id' => $waleed_sami,
            'name' => 'Hasan',
            'birth_date' => '2003-01-01',
        ]);

        $khaled_waleed = Son::where('name', 'Khaled')->first()->id;
        Grandson::create([
            'son_id' => $khaled_waleed,
            'name' => 'Samer',
            'birth_date' => '2001-01-01',
        ]);
        Grandson::create([
            'son_id' => $khaled_waleed,
            'name' => 'Fadi',
            'birth_date' => '2002-01-01',
        ]);
        Grandson::create([
            'son_id' => $khaled_waleed,
            'name' => 'Farouq',
            'birth_date' => '2003-01-01',
        ]);

        $mustafa_waleed = Son::where('name', 'Mustafa')->first()->id;

        Grandson::create([
            'son_id' => $mustafa_waleed,
            'name' => 'Ahmed',
            'birth_date' => '2001-01-01',
        ]);
        Grandson::create([
            'son_id' => $mustafa_waleed,
            'name' => 'Hassan',
            'birth_date' => '2002-01-01',
        ]);
        Grandson::create([
            'son_id' => $mustafa_waleed,
            'name' => 'Nader',
            'birth_date' => '2003-01-01',
        ]);

    }
}
