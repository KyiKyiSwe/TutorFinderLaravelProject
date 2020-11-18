<?php

use Illuminate\Database\Seeder;
use App\Grade;
use App\Level;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::create([
        	'name'=> 'Grade-1',
        	'level_id'=>'1'
        ]);
        Grade::create([
        	'name'=> 'Grade-2',
        	'level_id'=>'1'
        ]);
        Grade::create([
        	'name'=> 'Grade-3',
        	'level_id'=>'1'
        ]);
        Grade::create([
        	'name'=> 'Grade-4',
        	'level_id'=>'1'
        ]);
        Grade::create([
        	'name'=> 'Grade-5',
        	'level_id'=>'2'
        ]);
        Grade::create([
        	'name'=> 'Grade-6',
        	'level_id'=>'2'
        ]);
        Grade::create([
        	'name'=> 'Grade-7',
        	'level_id'=>'2'
        ]);
        Grade::create([
        	'name'=> 'Grade-8',
        	'level_id'=>'2'
        ]);
        Grade::create([
        	'name'=> 'Grade-9',
        	'level_id'=>'3'
        ]);
        Grade::create([
        	'name'=> 'Grade-9'
        	'level_id'=>'3'
        ]);
        
    }
}
