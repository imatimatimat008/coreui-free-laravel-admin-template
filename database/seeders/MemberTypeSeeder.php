<?php

namespace Database\Seeders;

use App\Models\MemberTypes;
use Illuminate\Database\Seeder;

class MemberTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeders = ['Alumni',
            'Collegiate'
        ];

        foreach ($seeders as $seeder){
            MemberTypes::create(['name'=>$seeder]);
        }
    }
}
