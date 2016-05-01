<?php

use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('districts')->truncate();

         DB::table('districts')->insert([
        	[
                'name'        => 'Dhaka',
                'divisions_id'=> '1',
                ],

                [
                'name'        => 'Faridpur',
                'divisions_id'=> '1',
                ],

                [
                'name'        => 'Gazipur',
                'divisions_id'=> '1',
                ],
                [
                'name'        => 'Gopalganj',
                'divisions_id'=> '1',
                ],
                [
                'name'        => 'Kishoreganj',
                'divisions_id'=> '1',
                ],
                [
                'name'        => 'Madaripur',
                'divisions_id'=> '1',
                ],
                [
                'name'        => 'Manikganj',
                'divisions_id'=> '1',
                ],
                [
                'name'        => 'Munshiganj',
                'divisions_id'=> '1',
                ],
                [
                'name'        => 'Narayanganj',
                'divisions_id'=> '1',
                ],
                [
                'name'        => 'Narsingdi',
                'divisions_id'=> '1',
                ],
                [
                'name'        => 'Rajbari',
                'divisions_id'=> '1',
                ],
                [
                'name'        => 'Shariatpur',
                'divisions_id'=> '1',
                ],

        		[
                'name'        => 'Tangail',
                'divisions_id'=> '1',
                ],

        	[
                'name'        => 'Rajshahi',
                'divisions_id'=> '2',
                ],
        	[
                'name'        => 'Natore',
                'divisions_id'=> '2',
                ],
        	[
                'name'        => 'Bogra',
                'divisions_id'=> '2',
                ],
                [
                'name'        => 'Joypurhat',
                'divisions_id'=> '2',
                ],
                [
                'name'        => 'Naogaon',
                'divisions_id'=> '2',
                ],

                [
                'name'        => 'Chapainawabganj',
                'divisions_id'=> '2',
                ],
                [
                'name'        => 'Pabna',
                'divisions_id'=> '2',
                ],
                [
                'name'        => 'Dinajpur',
                'divisions_id'=> '2',
                ],

        	[
                'name'        => 'Chittagong',
                'divisions_id'=> '3',
                ],

                [
                'name'        => 'Bandarban',
                'divisions_id'=> '3',
                ],
                [
                'name'        => 'Brahmanbaria',
                'divisions_id'=> '3',
                ],
                [
                'name'        => 'Chandpur',
                'divisions_id'=> '3',
                ],
                [
                'name'        => 'Comilla',
                'divisions_id'=> '3',
                ],
                [
                'name'        => 'Coxs Bazar',
                'divisions_id'=> '3',
                ],
                [
                'name'        => 'Feni',
                'divisions_id'=> '3',
                ],
                [
                'name'        => 'Khagrachhari',
                'divisions_id'=> '3',
                ],

        	[
                'name'        => 'Lakshmipur',
                'divisions_id'=> '3',
                ],

                [
                'name'        => 'Noakhali',
                'divisions_id'=> '3',
                ],
                [
                'name'        => 'Rangamati',
                'divisions_id'=> '3',
                ],

            [
                'name'        => 'Khulna',
                'divisions_id'=> '4',
                ],
                [
                'name'        => 'Bagerhat',
                'divisions_id'=> '4',
                ],
                [
                'name'        => 'Chuadanga',
                'divisions_id'=> '4',
                ],
                [
                'name'        => 'Jessore',
                'divisions_id'=> '4',
                ],
                [
                'name'        => 'Jhenaidah',
                'divisions_id'=> '4',
                ],
                [
                'name'        => 'Kushtia',
                'divisions_id'=> '4',
                ],
                [
                'name'        => 'Magura',
                'divisions_id'=> '4',
                ],
                [
                'name'        => 'Meherpur',
                'divisions_id'=> '4',
                ],
                [
                'name'        => 'Narail',
                'divisions_id'=> '4',
                ],
                [
                'name'        => 'Satkhira',
                'divisions_id'=> '4',
                ],
                [
                'name'        => 'Sylhet',
                'divisions_id'=> '5',
                ],
                [
                'name'        => 'Sunamganj',
                'divisions_id'=> '5',
                ],
                [
                'name'        => 'Moulvibazar',
                'divisions_id'=> '5',
                ],
                [
                'name'        => 'Habiganj',
                'divisions_id'=> '5',
                ],
                [
                'name'        => 'Barisal',
                'divisions_id'=> '6',
                ],
                [
                'name'        => 'Barguna',
                'divisions_id'=> '6',
                ],
                [
                'name'        => 'Bhola',
                'divisions_id'=> '6',
                ],
                [
                'name'        => 'Jhalokati',
                'divisions_id'=> '6',
                ],
                [
                'name'        => 'Patuakhali',
                'divisions_id'=> '6',
                ],
                [
                'name'        => 'Pirojpur',
                'divisions_id'=> '6',
                ],
                [
                'name'        => 'Rangpur',
                'divisions_id'=> '7',
                ],
                [
                'name'        => 'Gaibandha',
                'divisions_id'=> '7',
                ],
                [
                'name'        => 'Kurigram',
                'divisions_id'=> '7',
                ],
                [
                'name'        => 'Lalmonirhat',
                'divisions_id'=> '7',
                ],
                [
                'name'        => 'Nilphamari',
                'divisions_id'=> '7',
                ],
                [
                'name'        => 'Panchagarh',
                'divisions_id'=> '7',
                ],
                [
                'name'        => 'Thakurgaon',
                'divisions_id'=> '7',
                ],
                [
                'name'        => 'Mymensingh',
                'divisions_id'=> '8',
                ],
                [
                'name'        => 'Jamalpur',
                'divisions_id'=> '8',
                ],
                [
                'name'        => 'Netrakona',
                'divisions_id'=> '8',
                ],
                [
                'name'        => 'Sherpur',
                'divisions_id'=> '8',
                ]
            ]);
    }
}
