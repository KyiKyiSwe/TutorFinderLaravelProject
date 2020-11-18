<?php

use Illuminate\Database\Seeder;
use App\level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        level::create([
        	'name'=> 'Primary'
        ]);
        level::create([
        	'name'=> 'Secondary'
        ]);
        level::create([
        	'name'=> 'High School'
        ]);
    }
}
