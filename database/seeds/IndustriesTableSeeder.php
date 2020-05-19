<?php

use Illuminate\Database\Seeder;

class IndustriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('option_industries')->truncate();

        $industries = [
            ['name' => 'Health and social care'],
            ['name' => 'Education and childcare'],
            ['name' => 'Key public services'],
            ['name' => 'Local and national government'],
            ['name' => 'Food and goods provisions'],
            ['name' => 'Public safety and national security'],
            ['name' => 'Transport'],
            ['name' => 'Utilities, communications and key financial services'],
            ['name' => 'Others'],

        ];

        DB::table('option_industries')->insert($industries);


    }
}
