<?php

use Illuminate\Database\Seeder;

class DoctorCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctorcategory')->truncate();

        DB::table('doctorcategory')->insert([
        	[
                'name'        => 'Medicine',
                ],
        	[
                'name'        => 'Surgery',
                ],
        	[
                'name'        => 'Eye',
                ],
        	[
                'name'        => 'Heart disease',
                ],
        	[
                'name'        => 'Ear, Nose & Throat',
                ],
        	[
                'name'        => 'Dentistry',
                ],
        	
        	[
                'name'        => 'Orthopedic',
                ],
        	[
                'name'        => 'Nephrology',
                ]
            ]);
    }
}
