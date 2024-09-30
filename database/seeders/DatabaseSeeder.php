<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Calculation;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $calculations = [
            ['var1' => '2', 'var2' => '3', 'result' => '5'],
            ['var1' => '5', 'var2' => '7', 'result' => '12'],
            ['var1' => '10', 'var2' => '4', 'result' => '14'],
        ];

        foreach ($calculations as $calculation) {
            Calculation::create($calculation);
        }
    }
}
