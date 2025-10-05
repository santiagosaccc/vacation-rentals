<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertySeeder extends Seeder
{
    public function run()
    {
        Property::create([
            'title' => 'Casa en la playa',
            'price' => 250.00,
            'location' => 'Cartagena',
            'image' => 'https://via.placeholder.com/400x300.png?text=Casa+Playa',
        ]);

        Property::create([
            'title' => 'Cabaña en la montaña',
            'price' => 180.00,
            'location' => 'Boyacá',
            'image' => 'https://via.placeholder.com/400x300.png?text=Cabaña+Montaña',
        ]);

        Property::create([
            'title' => 'Apartamento moderno',
            'price' => 300.00,
            'location' => 'Bogotá',
            'image' => 'https://via.placeholder.com/400x300.png?text=Apartamento+Moderno',
        ]);
    }
}