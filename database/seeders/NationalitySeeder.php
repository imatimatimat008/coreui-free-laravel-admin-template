<?php

namespace Database\Seeders;

use App\Models\Nationalities;
use Illuminate\Database\Seeder;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$seeders = ['Filipino',
        ];

        foreach ($seeders as $seeder){
            Nationalities::create(['name'=>$seeder]);
        }*/
        Nationalities::create(['name' => 'Filipino',
            'code'=>'Fil']);
    }
}
