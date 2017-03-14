<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            'name' => 'Abia',
        ]);

        DB::table('states')->insert([
            'name' => 'Adamawa',
        ]);

        DB::table('states')->insert([
            'name' => 'Akwa-Ibom',
        ]);

        DB::table('states')->insert([
            'name' => 'Anambra',
        ]);

        DB::table('states')->insert([
            'name' => 'Bauchi',
        ]);

        DB::table('states')->insert([
            'name' => 'Bayelsa',
        ]);

        DB::table('states')->insert([
            'name' => 'Benue',
        ]);

        DB::table('states')->insert([
            'name' => 'Borno',
        ]);

        DB::table('states')->insert([
            'name' => 'Cross-River',
        ]);

        DB::table('states')->insert([
            'name' => 'Delta',
        ]);

        DB::table('states')->insert([
            'name' => 'Ebonyi',
        ]);

        DB::table('states')->insert([
            'name' => 'Edo',
        ]);

        DB::table('states')->insert([
            'name' => 'Ekiti',
        ]);

        DB::table('states')->insert([
            'name' => 'Enugu',
        ]);

        DB::table('states')->insert([
            'name' => 'Gombe',
        ]);

        DB::table('states')->insert([
            'name' => 'Imo',
        ]);

        DB::table('states')->insert([
            'name' => 'Jigawa',
        ]);

        DB::table('states')->insert([
            'name' => 'Kaduna',
        ]);

        DB::table('states')->insert([
            'name' => 'Kano',
        ]);

        DB::table('states')->insert([
            'name' => 'Katsina',
        ]);

        DB::table('states')->insert([
            'name' => 'Kebbi',
        ]);

        DB::table('states')->insert([
            'name' => 'Kogi',
        ]);

        DB::table('states')->insert([
            'name' => 'Kwara',
        ]);

        DB::table('states')->insert([
            'name' => 'Lagos',
        ]);

        DB::table('states')->insert([
            'name' => 'Nasarrawa',
        ]);

        DB::table('states')->insert([
            'name' => 'Niger',
        ]);

        DB::table('states')->insert([
            'name' => 'Ogun',
        ]);

        DB::table('states')->insert([
            'name' => 'Ondo',
        ]);

        DB::table('states')->insert([
            'name' => 'Osun',
        ]);

        DB::table('states')->insert([
            'name' => 'Oyo',
        ]);

        DB::table('states')->insert([
            'name' => 'Plateau',
        ]);

        DB::table('states')->insert([
            'name' => 'Rivers',
        ]);

        DB::table('states')->insert([
            'name' => 'Sokoto',
        ]);

        DB::table('states')->insert([
            'name' => 'Taraba',
        ]);

        DB::table('states')->insert([
            'name' => 'Yobe',
        ]);

        DB::table('states')->insert([
            'name' => 'Zamfara',
        ]);

        DB::table('states')->insert([
            'name' => 'FCT',
        ]);
    }
}
