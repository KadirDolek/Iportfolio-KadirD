<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::insert([
            'subtitle' => 'Développeur Web Full Stack',
            'birthdate' => '1995-05-15',
            'website' => 'https://monsite.com',
            'phone' => '+33 6 12 34 56 78',
            'city' => 'Paris',
            'age' => 30,
            'degree' => 'Master Informatique',
            'email' => 'email@example.com',
            'freelance' => 'Disponible',
            'subtext' => 'Passionné par le développement et la création de solutions innovantes.'
        ]);
    }
}
