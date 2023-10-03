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
            'availability' => 'For Rent',
            'furnish' => 'Partially Furnished',
            'name' => 'Ample Apartments',
            'description' => 'Your new home in the vibrant city of Talamban, Cebu. This partially furnished apartment is now available for rent, offering a comfortable and convenient living space for those seeking a cozy urban lifestyle.',
            'unitdesc' => 'With 22 square meters of space, Ample Apartments is perfect for individuals or couples looking for a manageable yet comfortable living area.',
            'beddesc' => 'The apartment features one bedroom, providing a private and comfortable space for rest and relaxation.',
            'furnishdesc' => 'The apartment comes partially furnished, making it easy for you to move in and add your personal touch to create a cozy atmosphere.',
            'pricedesc' => 'At a rental price of PHP 3,000,000, Ample Apartments offers great value for a convenient location in Talamban, Cebu.',
            'locationdesc' => 'Located in the heart of Talamban, you will have easy access to shopping centers, restaurants, schools, and public transportation, making daily life convenient and enjoyable.',
            'type' => 'Apartment',
            'price' =>'3,000,000',
            'sizes' => '22 Sqm',
            'address'=> 'Talamban',
            'state'=> 'Cebu',
            'zip'=> '6666',
            'bed'=> '1',
            'status' => 'Approved',
            'featured'=> 'Not Featured',
            'coverphoto' => 'property/ex1.jpg',
            'img'=> json_encode($images1),
            'vid'=> NULL,
        ]);

        Property::create([
            'availability' => 'For Sale',
            'furnish' => 'Fully Furnished',
            'name' => 'Luxurious Landing',
            'description' => 'A stunning one-bedroom condominium located in the desirable neighborhood of Banawa, Cebu. This fully furnished gem is now available for sale, offering an exquisite living experience in one of Cebus most sought-after areas.',
            'unitdesc' => 'With 51 square meters of space, Luxurious Landing offers ample room for comfortable living and entertaining',
            'beddesc' => 'The condominium features a beautifully appointed one-bedroom layout, providing a luxurious and private retreat.',
            'furnishdesc' => 'This condo is fully furnished with high-quality furnishings and appliances, allowing you to move in with ease and enjoy a premium living experience from day one.',
            'pricedesc' =>  'Priced at just PHP 4,000,000, Luxurious Landing offers exceptional value for a fully furnished condominium in Banawa, Cebu.',
            'locationdesc' => 'Situated in Banawa, you will have easy access to shopping centers, dining options, schools, and transportation hubs, ensuring a convenient and enjoyable lifestyle.',
            'type' => 'Condominium',
            'price' =>'4,000,000',
            'sizes' => '51 Sqm',
            'address'=> 'Banawa',
            'state'=> 'Cebu',
            'zip'=> '6663',
            'bed'=> '1',
            'status' => 'Approved',
            'featured'=> 'Featured',
            'coverphoto' => 'property/image1.jpg',
            'img'=> json_encode($images2),
            'vid'=> NULL,
        ]);

        Property::create([
            'availability' => 'For Rent',
            'furnish' => 'Not Furnished',
            'name' => 'The Views',
            'description' => 'A spacious studio unit located in the desirable neighborhood of Banawa, Cebu. This unfurnished studio offers a blank canvas for you to create your ideal living space. Its now available for rent, providing a flexible and affordable housing option in one of Cebus most sought-after areas.',
            'unitdesc' => 'With 18 square meters of space, Minded Manor offers plenty of room to live and entertain comfortably.',
            'beddesc' => 'This is a studio unit so there are no bedrooms',
            'furnishdesc' => 'The studio is not furnished, giving you the freedom to personalize the space to your taste and needs.',
            'pricedesc' => 'At a rental price of PHP 2,000,000, The Views offers excellent value for a studio unit in Banawa, Cebu.',
            'locationdesc' => 'Situated in Banawa, youll have easy access to shopping centers, dining options, schools, and transportation hubs, ensuring a convenient and enjoyable lifestyle.',
            'type' => 'Studio Unit',
            'price' =>'2,000,000',
            'sizes' => '51 Sqm',
            'address'=> 'Banawa',
            'state'=> 'Cebu',
            'zip'=> '6663',
            'bed'=> '0',
            'status' => 'Approved',
            'featured'=> 'Not Featured',
            'coverphoto' => 'property/img1.jpg',
            'img'=> json_encode($images3),
            'vid'=> NULL,
        ]);

        Property::create([
            'availability' => 'For Sale',
            'furnish' => 'Partially Furnished',
            'name' => 'Minded Manor',
            'description' => 'Welcome to Minded Manor, a charming two-bedroom apartment located in the heart of Makati, Manila. This partially furnished gem is now available for sale, making it an excellent opportunity for anyone looking for a cozy and convenient urban living space.',
            'unitdesc' => 'With 18 square meters of space, Minded Manor offers plenty of room to live and entertain comfortably.',
            'beddesc' => 'This Condominium features 2 bedrooms, making it ideal for a small family, couples, or those who need extra space for a home office.',
            'furnishdesc' => 'The apartment comes Partially Furnished, offering you the flexibility to add your personal touch and style to the space.',
            'pricedesc' => 'At just PHP 10,000,000, Minded Manor is a fantastic value for a property in this prime location.',
            'locationdesc' => 'Makati is known for its safety and security, ensuring peace of mind for you and your loved ones.',
            'type' => 'Condominium',
            'price' =>'10,000,000',
            'sizes' => '42 Sqm',
            'address'=> 'Makati',
            'state'=> 'Manila',
            'zip'=> '4663',
            'bed'=> '2',
            'status' => 'Approved',
            'featured'=> 'Not Featured',
            'coverphoto' => 'property/photo1.jpg',
            'img'=> json_encode($images4),
            'vid'=> NULL,
        ]);

        Property::create([
            'availability' => 'For Sale',
            'furnish' => 'Fully Furnished',
            'name' => 'Useful Units',
            'description' => 'A splendid two-bedroom apartment situated in the bustling city of Taguig, Manila. This fully furnished apartment is now available for sale, offering an exceptional living experience in a prime location.',
            'unitdesc' => 'With a generous 100 square meters of space, Useful Units provides ample room for comfortable living and entertaining.',
            'beddesc' => 'The apartment boasts two beautifully appointed bedrooms, ensuring plenty of space for family or guests.',
            'furnishdesc' => 'This apartment comes fully furnished with tasteful and high-quality furnishings, allowing you to move in seamlessly and enjoy the benefits of luxury living from day one.',
            'pricedesc' => ' Priced at just PHP 10,000,000, Useful Units offers outstanding value for a fully furnished apartment in Taguig, Manila.',
            'locationdesc' => 'Nestled in Taguig, you will have convenient access to shopping centers, dining options, schools, and transportation hubs, enhancing your daily living experience.',
            'type' => 'Apartment',
            'price' =>'10,000,000',
            'sizes' => '100 Sqm',
            'address'=> 'Taguig',
            'state'=> 'Manila',
            'zip'=> '4663', 
            'bed'=> '2',
            'status' => 'Approved',
            'featured'=> 'Not Featured',
            'coverphoto' => 'property/sample1.jpg',
            'img'=> json_encode($images5),
            'vid'=> NULL,
        ]);


    }
}
