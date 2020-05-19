<?php

use Illuminate\Database\Seeder;

class HealthConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('option_healthconditions')->truncate();

        $conditions = [
            ['name' => 'HIV'],
            ['name' => 'Arthritis'],
            ['name' => 'Asthma'],
            ['name' => 'Diabetes'],
            ['name' => 'Cancer'],
            ['name' => 'High Cholesterol'],
            ['name' => 'Kidney Disease'],
            ['name' => 'Stroke'],
            ['name' => 'Others'],
        ];

        DB::table('option_healthconditions')->insert($conditions);
    }
}
