<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class mydetail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
           
            'name' =>'Bishwajeet Mehta',
            'address' => 'Ashok-vatika Birgunj, Parsa',
            'phone' =>'+977-9824210052',
            'email' =>'Abcphp@gmail.com',
            'age' =>'21',
            'degree' =>'Diploma in Computer Engineering',
            'status' =>'Available',
            'description' =>'Experienced Laravel and Django developer with 1 year of proven expertise in crafting tailored web solutions. From backend intricacies , I bring a year of hands-on experience to every project, ensuring top-notch results.',
        ];

        DB::table('mydetails')->insert($data);
    }
}
