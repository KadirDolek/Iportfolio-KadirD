<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::insert([
            ['skill' => 'Java',
            'pourcentage' => 80],
            ['skill' => 'C',
            'pourcentage' => 30],
            ['skill' => 'Javascript',
            'pourcentage' => 40],
            ['skill' => 'Tailwind',
            'pourcentage' => 70],
        ]);
    }
}
