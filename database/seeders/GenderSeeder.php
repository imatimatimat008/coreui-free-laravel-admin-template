<?php

namespace Database\Seeders;

use App\Models\Genders;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = ['Male',
            'Female'
        ];

        foreach ($genders as $gender){
            Genders::create(['name'=>$gender]);
        }
    }
}
