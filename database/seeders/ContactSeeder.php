<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::insert([
            'street' => 'Chaussée de wavre',
            'number' => 1300,
            'city' => 'Bruxelles',
            'zip' => 1160,
            'phone' => '0479939393',
            'email' => 'kadirdolek@hotmail.com'
        ]);
    }
}
