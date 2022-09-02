<?php

namespace Database\Seeders;

use App\Models\Suffixes;
use Illuminate\Database\Seeder;

class SuffixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeders = ['Jr',
            'Sr',
            'III'
        ];

        foreach ($seeders as $seeder){
            Suffixes::create(['name'=>$seeder]);
        }
    }
}
