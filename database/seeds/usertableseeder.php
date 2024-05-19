<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usertableseeder extends Seeder
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
            'email' =>'mehtabishwajeet99@gmail.com',
            'password' =>bcrypt('123456'),
            'phone' =>'+977-9824210052',
            'address' => 'Ashok-vatika Birgunj, Parsa',
            'age' =>'21',
            'profession'=>'Laravel & Django Developer',
            'degree' =>'Diploma in Computer Engineering',
            'status' =>'Available',
            'description' =>'Experienced Laravel and Django developer with 1 year of proven expertise in crafting tailored web solutions. From backend intricacies , I bring a year of hands-on experience to every project, ensuring top-notch results.',
        ];
        DB::table('users')->insert($data);
    }
}
