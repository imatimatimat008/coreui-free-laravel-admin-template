<?php

namespace Database\Seeders;

use App\Models\Religions;
use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeders = ['Roman Catholic',
            'Islam',
            'Christian',
            'Baptist',
            'Evangelicals (PCEC)',
            'Iglesia ni Cristo',
            'Protestant',
            'Aglipayan',
            'Seventh-day Adventist',
            'Bible Baptist Church',
            'United Church of Christ in the Philippines',
            'Jehovah\'s Witnesses',
            'None',
            'Others/Not reported',
        ];

        foreach ($seeders as $seeder){
            Religions::create(['name'=>$seeder]);
        }
    }
}
