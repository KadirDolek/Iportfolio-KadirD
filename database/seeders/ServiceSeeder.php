<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([
            [
                'icon' => '🎨',
                'title' => 'Logo1',
                'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias voluptatibus cumque corrupti deleniti dolore minima ullam harum quibusdam laborum.'
            ],
            [
                'icon' => '🎨',
                'title' => 'Design Graphique',
                'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias voluptatibus cumque corrupti deleniti dolore minima ullam harum quibusdam laborum.'
            ],
            [
                'icon' => '📍',
                'title' => 'Géolocalisation',
                'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias voluptatibus cumque corrupti deleniti dolore minima ullam harum quibusdam laborum.'
            ],
            [
                'icon' => '💻',
                'title' => 'Développement Web',
                'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias voluptatibus cumque corrupti deleniti dolore minima ullam harum quibusdam laborum.'
            ],
            [
                'icon' => '🗺️',
                'title' => 'Cartographie',
                'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias voluptatibus cumque corrupti deleniti dolore minima ullam harum quibusdam laborum.'
            ],
            [
                'icon' => '⚙️',
                'title' => 'Configuration',
                'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias voluptatibus cumque corrupti deleniti dolore minima ullam harum quibusdam laborum.'
            ]
        ]);
    }
}
