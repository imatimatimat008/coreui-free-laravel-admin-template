<?php

namespace Database\Seeders;

use App\Models\RequestTypes;
use Illuminate\Database\Seeder;

class RequestTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeders = ['New',
            'Renew',
            'Reprint',
        ];

        foreach ($seeders as $seeder){
            RequestTypes::create(['name'=>$seeder]);
        }
    }
}
