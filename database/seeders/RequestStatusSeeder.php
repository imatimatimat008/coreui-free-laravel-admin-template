<?php

namespace Database\Seeders;

use App\Models\RequestStatuses;
use Illuminate\Database\Seeder;

class RequestStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeders = [
            [
                'name' => 'pending',
                'code' => 'pdng',
            ],
            [
                'name' => 'completed',
                'code' => 'comp'
            ],
            [
                'name' => 'cancelled',
                'code' => 'clx',
            ],
            [
                'name' => 'under process',
                'code' => 'undproc',
            ],
        ];

        foreach ($seeders as $seeder) {
            RequestStatuses::create($seeder);
        }
    }
}
