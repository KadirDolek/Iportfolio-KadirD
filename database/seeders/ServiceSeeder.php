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
                'icon' => '
                <svg  xmlns="http://www.w3.org/2000/svg" width="128" height="128"  
                    fill="#000000" viewBox="0 0 24 24" >
                    <path d="M20 6h-5.59l2.29-2.29-1.41-1.41L12 5.59 8.71 2.3 7.3 3.71 9.59 6H4c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M4 19V8h16v11z"></path>
                </svg>',
                'title' => 'Logo1',
                'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias voluptatibus cumque corrupti deleniti dolore minima ullam harum quibusdam laborum.'
            ],
            [
                'icon' => '
                <svg  xmlns="http://www.w3.org/2000/svg" width="128" height="128"  
                fill="#000000" viewBox="0 0 24 24" >
                <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                <path d="m20,2H6c-1.65,0-3,1.35-3,3v14c0,1.65,1.35,3,3,3h15v-2H6c-.55,0-1-.45-1-1s.45-1,1-1h14c.55,0,1-.45,1-1V3c0-.55-.45-1-1-1Zm-1,14H6c-.35,0-.69.07-1,.18V5c0-.55.45-1,1-1h13v12Z"></path><path d="M8.5 6A1.5 1.5 0 1 0 8.5 9 1.5 1.5 0 1 0 8.5 6z"></path><path d="M14 9 11 12.5 9.5 11 7 14 18 14 14 9z"></path>
                </svg>',
                'title' => 'Logo2',
                'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias voluptatibus cumque corrupti deleniti dolore minima ullam harum quibusdam laborum.'
            ],
            [
                'icon' => '
                <svg  xmlns="http://www.w3.org/2000/svg" width="128" height="128"  
                fill="#000000" viewBox="0 0 24 24" >
                <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                <path d="m11.42,21.81c.17.12.38.19.58.19s.41-.06.58-.19c.3-.22,7.45-5.37,7.42-11.82,0-4.41-3.59-8-8-8s-8,3.59-8,8c-.03,6.45,7.12,11.6,7.42,11.82Zm.58-17.81c3.31,0,6,2.69,6,6h0c.02,4.44-4.39,8.43-6,9.74-1.61-1.31-6.02-5.29-6-9.74,0-3.31,2.69-6,6-6Z"></path>
                </svg>',
                'title' => 'Logo3',
                'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias voluptatibus cumque corrupti deleniti dolore minima ullam harum quibusdam laborum.'
            ],
            [
                'icon' => '
                <svg  xmlns="http://www.w3.org/2000/svg" width="128" height="128"  
                    fill="#000000" viewBox="0 0 24 24" >
                    <path d="M20 6h-5.59l2.29-2.29-1.41-1.41L12 5.59 8.71 2.3 7.3 3.71 9.59 6H4c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M4 19V8h16v11z"></path>
                </svg>',
                'title' => 'Logo4',
                'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias voluptatibus cumque corrupti deleniti dolore minima ullam harum quibusdam laborum.'
            ],
            [
                'icon' => '
                <svg  xmlns="http://www.w3.org/2000/svg" width="128" height="128"  
                fill="#000000" viewBox="0 0 24 24" >
                <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                <path d="m11.42,21.81c.17.12.38.19.58.19s.41-.06.58-.19c.3-.22,7.45-5.37,7.42-11.82,0-4.41-3.59-8-8-8s-8,3.59-8,8c-.03,6.45,7.12,11.6,7.42,11.82Zm.58-17.81c3.31,0,6,2.69,6,6h0c.02,4.44-4.39,8.43-6,9.74-1.61-1.31-6.02-5.29-6-9.74,0-3.31,2.69-6,6-6Z"></path>
                </svg>',
                'title' => 'Logo5',
                'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias voluptatibus cumque corrupti deleniti dolore minima ullam harum quibusdam laborum.'
            ],
            [
                'icon' => '
                <svg  xmlns="http://www.w3.org/2000/svg" width="128" height="128"  
                fill="#000000" viewBox="0 0 24 24" >
                <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                <path d="m20,4h-8.59l-1.41-1.41c-.38-.38-.88-.59-1.41-.59h-4.59c-1.1,0-2,.9-2,2v14c0,1.1.9,2,2,2h16c1.1,0,2-.9,2-2V6c0-1.1-.9-2-2-2Zm0,14H4s0-12,0-12h16v12Z"></path><path d="M9.79 8.29 6.09 12 9.79 15.71 11.21 14.29 8.91 12 11.21 9.71 9.79 8.29z"></path><path d="M14.21 15.71 17.91 12 14.21 8.29 12.79 9.71 15.09 12 12.79 14.29 14.21 15.71z"></path>
                </svg>',
                'title' => 'Logo6',
                'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium alias voluptatibus cumque corrupti deleniti dolore minima ullam harum quibusdam laborum.'
            ],
        ]);
    }
}
