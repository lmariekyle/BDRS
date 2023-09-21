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
        $images1 = [
            'property/ex1.jpg',
            'property/ex2.jpg',
            'property/ex3.jpg',
            // Add more image paths as needed
        ];

        $images2 = [
            'property/image1.jpg',
            'property/image2.jpg',
            'property/image3.jpg',
            // Add more image paths as needed
        ];

        $images3 = [
            'property/img1.jpg',
            'property/img2.jpg',
            'property/img3.jpg',
            // Add more image paths as needed
        ];

        $images4 = [
            'property/photo1.jpg',
            'property/photo2.jpg',
            'property/photo3.jpg',
            // Add more image paths as needed
        ];

        $images5 = [
            'property/sample1.jpg',
            'property/sample2.jpg',
            'property/sample3.jpg',
            // Add more image paths as needed
        ];

        Property::create([
            'propertyID' => '1BR-001',
            'name' => 'Ample Apartments',
            'description' => 'An excellent choice for those seeking a minimalist and low-maintenance lifestyle, offering convenience and often located in urban or highly desirable locations.',
            'type' => 'Apartment',
            'price' =>'1000',
            'sizes' => '51 Sqm',
            'address'=> 'Talamban',
            'state'=> 'Cebu',
            'zip'=> '6666',
            'bed'=> '1',
            'provision'=> 'For Sale',
            'status' => 'Pending',
            'featured'=> 'Not Featured',
            'coverphoto' => 'property/ex1.jpg',
            'img'=> json_encode($images1),
            'vid'=> NULL,
        ]);

        Property::create([
            'propertyID' => '1BR-002',
            'name' => 'Luxurious Landing',
            'description' => 'An excellent choice for those seeking a minimalist and low-maintenance lifestyle, offering convenience and often located in urban or highly desirable locations.',
            'type' => 'Condominium',
            'price' =>'1500',
            'sizes' => '42 Sqm',
            'address'=> 'Banawa',
            'state'=> 'Cebu',
            'zip'=> '6663',
            'bed'=> '1',
            'provision'=> 'For Rent',
            'status' => 'Pending',
            'featured'=> 'Featured',
            'coverphoto' => 'property/image1.jpg',
            'img'=> json_encode($images2),
            'vid'=> NULL,
        ]);

        Property::create([
            'propertyID' => '2BR-001',
            'name' => 'The Views',
            'description' => 'An excellent choice for those seeking a minimalist and low-maintenance lifestyle, offering convenience and often located in urban or highly desirable locations.',
            'type' => 'Condominium',
            'price' =>'2000',
            'sizes' => '100 Sqm',
            'address'=> 'Banawa',
            'state'=> 'Cebu',
            'zip'=> '6663',
            'bed'=> '2',
            'provision'=> 'For Sale',
            'status' => 'Pending',
            'featured'=> 'Not Featured',
            'coverphoto' => 'property/img1.jpg',
            'img'=> json_encode($images3),
            'vid'=> NULL,
        ]);

        Property::create([
            'propertyID' => '2BR-002',
            'name' => 'Minded Manor',
            'description' => 'An excellent choice for those seeking a minimalist and low-maintenance lifestyle, offering convenience and often located in urban or highly desirable locations.',
            'type' => 'Apartment',
            'price' =>'2500',
            'sizes' => '100 Sqm',
            'address'=> 'Makati',
            'state'=> 'Manila',
            'zip'=> '4663',
            'bed'=> '2',
            'provision'=> 'For Rent',
            'status' => 'Pending',
            'featured'=> 'Not Featured',
            'coverphoto' => 'property/photo1.jpg',
            'img'=> json_encode($images4),
            'vid'=> NULL,
        ]);

        Property::create([
            'propertyID' => 'ST-001',
            'name' => 'Useful Units',
            'description' => 'An excellent choice for those seeking a minimalist and low-maintenance lifestyle, offering convenience and often located in urban or highly desirable locations.',
            'type' => 'Apartment',
            'price' =>'3000',
            'sizes' => '22 Sqm',
            'address'=> 'Makati',
            'state'=> 'Manila',
            'zip'=> '4663', 
            'bed'=> '2',
            'provision'=> 'For Sale',
            'status' => 'Pending',
            'featured'=> 'Not Featured',
            'coverphoto' => 'property/sample1.jpg',
            'img'=> json_encode($images5),
            'vid'=> NULL,
        ]);


    }
}
