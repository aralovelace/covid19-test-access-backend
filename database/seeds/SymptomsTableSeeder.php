<?php

use Illuminate\Database\Seeder;

class SymptomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('option_symptoms')->truncate();

        $symptoms = [
            ['name' => 'vomiting', 'level' => 10],
            ['name' => 'sore throat', 'level' => 6],
            ['name' => 'runny nose', 'level' => 4],
            ['name' => 'fever', 'level' => 8],
            ['name' => 'loss smell/taste', 'level' => 8],
            ['name' => 'fever', 'level' => 9],
            ['name' => 'diarrhea', 'level' => 6],
            ['name' => 'dizzy', 'level' => 6],
            ['name' => 'difficult breathing', 'level' => 10],
            ['name' => 'diarrhea', 'level' => 8],
            ['name' => 'cough', 'level' => 4],
            ['name' => 'body pain', 'level' => 5],
        ];

        DB::table('option_symptoms')->insert($symptoms);
    }
}
