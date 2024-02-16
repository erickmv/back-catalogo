<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;


class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar datos de prueba
        Person::create([
            'first_name' => 'Erick Adrián',
            'last_name' => 'Méndez Villalpando',
            'address' => 'Paseo 19, Querétaro',
            'phone' => '555-1234',
            'email' => 'erick@gmail.com',
        ]);

        Person::create([
            'first_name' => 'Diego',
            'last_name' => 'Gonzalez Aguado',
            'address' => 'Celaya',
            'phone' => '555-5678',
            'email' => 'diego@gmail.com',
        ]);

    }
}
