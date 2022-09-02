<?php

namespace Database\Seeders;

use App\Models\CivilStatuses;
use Illuminate\Database\Seeder;

class CivilStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $civil_statuses = ['Single',
            'Married',
            'Divorced',
            'Widowed',
            'Separated',
            'Others',
        ];

        foreach ($civil_statuses as $civil_status){
            CivilStatuses::create(['name'=>$civil_status]);
        }
    }
}
