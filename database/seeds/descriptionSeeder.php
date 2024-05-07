<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class descriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
           
            'about' =>"From novice to adept, my journey mastering Laravel and Django has been transformative. Hands-on experience has honed my skills, turning learning into expertise for crafting innovative web solutions",
            'skills' => 'Proficient in HTML, CSS, JavaScript, Laravel, and Django, I bring a versatile skill set to web development projects.  I ensure seamless and efficient solutions tailored to your needs.',
            'sumary' =>"Skilled in Django and Laravel development, I deliver dynamic web solutions. From Python's elegance to PHP's efficiency, I ensure top-notch results tailored to client needs.",
            'language' =>'I am fluent in Bhojpuri, Nepali, English, and Maithili. Each language represents a unique cultural and regional identity, allowing me to communicate effectively across diverse communities and contexts',
            'myself' =>"Adaptable and quick on the uptake, I excel in both Laravel and Django development. With a year's experience under my belt, I bring versatility and efficiency to crafting bespoke web solutions tailored to your needs",
            'contact' =>"For top-tier website development, I specialize in both Django and Laravel. Whether you prioritize Pythons elegance or PHP's efficiency, I tailor solutions to exceed your expectations. Let's build your web presence with precision and expertise",
            
        ];

        DB::table('descriptons')->insert($data);
    }
}
