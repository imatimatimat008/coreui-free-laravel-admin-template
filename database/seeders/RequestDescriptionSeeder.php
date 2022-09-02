<?php

namespace Database\Seeders;

use App\Models\RequestDescriptions;
use Illuminate\Database\Seeder;

class RequestDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeders = ['ID Only',
            'Certificate Only',
            'Documents Only',
            'Certificate and ID',
            'Certificate, ID and Documents',
            'Reprint'
        ];

        foreach ($seeders as $seeder){
            RequestDescriptions::create(['name'=>$seeder]);
        }
    }
}
