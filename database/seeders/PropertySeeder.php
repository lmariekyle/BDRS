<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;
use Illuminate\Support\Facades\Hash;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Property::create([
            'propertyID' => 'Apt-001',
            'name' => 'Apartment 1',
            'type' => '1BR Apartment',
            'price' =>'16,000',
            'sizes' => 'Square Meter',
            'measurement' => '=50 Meters Squared',
            'address'=> 'Talamban, Cebu',
            'state'=> 'Cebu',
            'zip'=> '6666',
            'bed'=> '2',
            'provision'=> 'Lorem Ipsum',
            'approve' => '1',
            'status'=> 'For Rent',
            'img'=> NULL,
            'vid'=> NULL,
        ]);

        Property::create([
            'propertyID' => 'Condo-001',
            'name' => 'Condo 1',
            'type' => '3BR Condominium',
            'price' =>'1,600,000',
            'sizes' => 'Square Meter',
            'measurement' => '139.3546 Meters Squared',
            'address'=> 'Talamban, Cebu',
            'state'=> 'Cebu',
            'zip'=> '6666',
            'bed'=> '2',
            'provision'=> 'Lorem Ipsum',
            'approve' => '1',
            'status'=> 'For Sale',
            'img'=> NULL,
            'vid'=> NULL,
        ]);
    }
}
