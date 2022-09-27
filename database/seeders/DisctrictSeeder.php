<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DisctrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        District::create([
            'district_name' => 'Kamonyi',
        ]);
        District::create([
            'district_name' => 'Ruhango',
        ]);
        District::create([
            'district_name' => 'Nyanza',
        ]);
        District::create([
            'district_name' => 'Muhanga',
        ]);

    }
}


