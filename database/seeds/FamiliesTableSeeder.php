<?php

use Illuminate\Database\Seeder;

class FamiliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('option_families')->truncate();

        $families = [
            ['name' => 'Me'],
            ['name' => 'Mother'],
            ['name' => 'Father'],
            ['name' => 'Sister'],
            ['name' => 'Brother'],
            ['name' => 'Aunt'],
            ['name' => 'Uncle'],
            ['name' => 'Grandmother'],
            ['name' => 'Grandfather'],

        ];


        DB::table('option_families')->insert($families);

    }
}
