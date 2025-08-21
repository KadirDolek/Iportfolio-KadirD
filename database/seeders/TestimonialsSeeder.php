<?php

namespace Database\Seeders;

use App\Models\Testimonials;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonials::insert([
            [
                'comment' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, culpa.',
                'image' => 'storage/portfolio-assets/testimonial-1.jpg',
                'name' => 'Polpot pol',
                'position' => 'Assitant jsp'
            ],
            [
                'comment' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, culpa.',
                'image' => 'storage/portfolio-assets/testimonial-2.jpg',
                'name' => 'Polpot pol',
                'position' => 'Assitant jsp'
            ],
            [
                'comment' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, culpa.',
                'image' => 'storage/portfolio-assets/testimonial-3.jpg',
                'name' => 'Polpot pol',
                'position' => 'Assitant jsp'
            ],
            [
                'comment' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, culpa.',
                'image' => 'storage/portfolio-assets/testimonial-4.jpg',
                'name' => 'Polpot pol',
                'position' => 'Assitant jsp'
            ],
        ]);
    }
}
