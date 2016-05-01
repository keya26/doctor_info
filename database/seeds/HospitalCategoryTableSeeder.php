<?php

use Illuminate\Database\Seeder;

class HospitalCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospitalcategory')->truncate();

        DB::table('hospitalcategory')->insert([
        	[
                'name'        => 'Hospital',
                ],
        	[
                'name'        => 'Clinic',
                ],
        	[
                'name'        => 'Consultation Center',
                ],
        	[
                'name'        => 'Dental Clinic',
                ],
        	[
                'name'        => 'Diagnostic Centre',
                ],
        	[
                'name'        => 'Upazila Health Complex',
                ]
            ]);
    }
}
