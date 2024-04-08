<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TourCategory;
use App\Models\PefectTourPackages;

class TourCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tour_categories = Collect(
            array(
                [
                    'name' => 'Corbett Safari',
                    'package' => [
                        [
                            // 'tour_category_id' => 2,
                            'name' => 'Jeep Safari Online Booking & Tariff - Jim Corbett National Park',
                            'description' => "Welcome to Jeep Safari Booking to Jim Corbett National Park. Visitors can book online Jeep Safari for five different zones of the park namely Bijrani, Jhirna, Dhikala, Dhela, Corbett Landscape (Sitabani) and Durgadevi. All the procedures of Jeep Safari Booking at Corbett are managed by the forest government officials as per the guidelines of India's forest department",
                            'images' => 'assets/frontend/img/packages/jeep-safari_01.webp',
                            'price' => 6500,
                            'duration' => 'Night',
                            'itinerary' => 'Itinerary for Package 1',
                            'accommodations' => 'Accommodations for Package 1',
                            'meals' => 'Meals for Package 1',
                            'transportation' => 'Transportation for Package 1',
                            'tour_guides' => 'Tour guides for Package 1',
                            'status' => 1,
                        ],
                        [
                            // 'tour_category_id' => 2,
                            'name' => 'Elephant Safari Online Booking & Tariff - Jim Corbett National Park',
                            'description' => "Welcome to Elephant Safari Booking to Corbett National Park. Visitors can book online Elephant Safari for Reserve Zone of Corbett National park. Corbett National Park visit without elephant safari means your tour is not complete.",
                            'images' => 'assets/frontend/img/packages/banner-image-3.webp',
                            'price' =>  3500,
                            'duration' => 'Day',
                            'itinerary' => 'Itinerary for Package 1',
                            'accommodations' => 'Accommodations for Package 1',
                            'meals' => 'Meals for Package 1',
                            'transportation' => 'Transportation for Package 1',
                            'tour_guides' => 'Tour guides for Package 1',
                            'status' => 1,
                        ],
                        [
                            // 'tour_category_id' => 2,
                            'name' => 'Dhikala Canter Safari Online Booking & Tariff - Jim Corbett National Park',
                            'description' => "Welcome to Elephant Safari Booking to Corbett National Park. Visitors can book online Elephant Safari for Reserve Zone of Corbett National park. Corbett National Park visit without elephant safari means your tour is not complete.",
                            'images' => 'assets/frontend/img/packages/banner-image-2.webp',
                            'price' =>  2500.00,
                            'duration' => 'Per Person, Available today',
                            'itinerary' => 'Itinerary for Package 1',
                            'accommodations' => 'Accommodations for Package 1',
                            'meals' => 'Meals for Package 1',
                            'transportation' => 'Transportation for Package 1',
                            'tour_guides' => 'Tour guides for Package 1',
                            'status' => 1,
                        ],
                        [
                            // 'tour_category_id' => 2,
                            'name' => 'Night Stay Accommodation Online Booking & Tariff - Jim Corbett National Park',
                            'description' => "Welcome to Night Stay Accommodation Booking to Corbett National Park. Visitors can book online Night Stay Accommodation for different zones of Corbett National park namely Dhikala - Bijrani - Jhirna - Sonanadi - Durgadevi - Dhela. All the procedures of Night Stay Accommodation Booking at Corbett are managed by the forest officials as per the guidelines of India's forest department. Please note that we cannot influence the night stay accommodation zone, night stay accommodation, safari driver and the naturalist guide as it is not in our hand. It is solely decided by the forest officials.",
                            'images' => 'assets/frontend/img/packages/banner-image-1.webp',
                            'price' =>  2500.00,
                            'duration' => 'Per Person, Available today',
                            'itinerary' => 'Itinerary for Package 1',
                            'accommodations' => 'Accommodations for Package 1',
                            'meals' => 'Meals for Package 1',
                            'transportation' => 'Transportation for Package 1',
                            'tour_guides' => 'Tour guides for Package 1',
                            'status' => 1,
                        ],
                    ]
                ],
                [
                    'name' => 'Corbett Hotels',
                    'package' => [
                        [
                            // 'tour_category_id' => 2,
                            'name' => 'Machaan Resort',
                            'description' => 'Uttarakhand, is a perfect combination of serenity, tranquility, adventure, nature, beauty, and peace, all that a couple could hope to find for an ideal honeymoon, providing a retreat and an idyllic location for a honeymoon away from the chaos of a metropolitan.',
                            'images' => 'assets/frontend/img/packages/machaan-resort.jpg',
                            'price' => 6500,
                            'duration' => 'Night',
                            'itinerary' => 'Itinerary for Package 1',
                            'accommodations' => 'Accommodations for Package 1',
                            'meals' => 'Meals for Package 1',
                            'transportation' => 'Transportation for Package 1',
                            'tour_guides' => 'Tour guides for Package 1',
                            'status' => 1,
                        ],
                        [
                            // 'tour_category_id' => 2,
                            'name' => 'Arch The Baakhli Corbett',
                            'description' => 'Uttarakhand, is a perfect combination of serenity, tranquility, adventure, nature, beauty, and peace, all that a couple could hope to find for an ideal honeymoon, providing a retreat and an idyllic location for a honeymoon away from the chaos of a metropolitan.',
                            'images' => 'assets/frontend/img/packages/arch-thebaakhli-corbett.jpg',
                            'price' => 5800,
                            'duration' => 'Night',
                            'itinerary' => 'Itinerary for Package 2',
                            'accommodations' => 'Accommodations for Package 2',
                            'meals' => 'Meals for Package 2',
                            'transportation' => 'Transportation for Package 2',
                            'tour_guides' => 'Tour guides for Package 2',
                            'status' => 1,
                        ],
                        [
                            // 'tour_category_id' => 2,
                            'name' => 'Countryard Resort',
                            'description' => 'Uttarakhand, is a perfect combination of serenity, tranquility, adventure, nature, beauty, and peace, all that a couple could hope to find for an ideal honeymoon, providing a retreat and an idyllic location for a honeymoon away from the chaos of a metropolitan.',
                            'images' => 'assets/frontend/img/packages/countryard-resort.jpg',
                            'price' => 6000,
                            'duration' => 'Night',
                            'itinerary' => 'Itinerary for Package 3',
                            'accommodations' => 'Accommodations for Package 3',
                            'meals' => 'Meals for Package 3',
                            'transportation' => 'Transportation for Package 3',
                            'tour_guides' => 'Tour guides for Package 3',
                            'status' => 1,
                        ],
                        [
                            // 'tour_category_id' => 2,
                            'name' => 'Corbett The Grand',
                            'description' => 'Uttarakhand, is a perfect combination of serenity, tranquility, adventure, nature, beauty, and peace, all that a couple could hope to find for an ideal honeymoon, providing a retreat and an idyllic location for a honeymoon away from the chaos of a metropolitan.',
                            'images' => 'assets/frontend/img/packages/corbett-the-grand.jpg',
                            'price' => 7000,
                            'duration' => 'Nights',
                            'itinerary' => 'Itinerary for Package 4',
                            'accommodations' => 'Accommodations for Package 4',
                            'meals' => 'Meals for Package 4',
                            'transportation' => 'Transportation for Package 4',
                            'tour_guides' => 'Tour guides for Package 4',
                            'status' => 1,
                        ],
                        [
                            // 'tour_category_id' => 2,
                            'name' => 'La Savanna',
                            'description' => 'Uttarakhand, is a perfect combination of serenity, tranquility, adventure, nature, beauty, and peace, all that a couple could hope to find for an ideal honeymoon, providing a retreat and an idyllic location for a honeymoon away from the chaos of a metropolitan.',
                            'images' => 'assets/frontend/img/packages/la-savanna.jpg',
                            'price' => 7000,
                            'duration' => 'Nights',
                            'itinerary' => 'Itinerary for Package 6',
                            'accommodations' => 'Accommodations for Package 6',
                            'meals' => 'Meals for Package 6',
                            'transportation' => 'Transportation for Package 6',
                            'tour_guides' => 'Tour guides for Package 6',
                            'status' => 1,
                        ],
                        [
                            // 'tour_category_id' => 2,
                            'name' => 'Riverside Resort',
                            'description' => 'Uttarakhand, is a perfect combination of serenity, tranquility, adventure, nature, beauty, and peace, all that a couple could hope to find for an ideal honeymoon, providing a retreat and an idyllic location for a honeymoon away from the chaos of a metropolitan.',
                            'images' => 'assets/frontend/img/packages/riverside-resort.jpg',
                            'price' => 11000,
                            'duration' => 'Night',
                            'itinerary' => 'Itinerary for Package 5',
                            'accommodations' => 'Accommodations for Package 5',
                            'meals' => 'Meals for Package 5',
                            'transportation' => 'Transportation for Package 5',
                            'tour_guides' => 'Tour guides for Package 5',
                            'status' => 1,
                        ],
                    ]
                ],
                [
                    'name' => 'Tour Package',
                ],
            )
        );


        if (count($tour_categories) > 0) {
            foreach ($tour_categories as $tour_category) {
                // $tour_category
                $category = TourCategory::create([
                    'name' => $tour_category['name'],
                ]);

                if(isset($tour_category['package']) and (count($tour_category['package']) > 0)){
                    foreach($tour_category['package'] as $key => $package){
                        PefectTourPackages::create([
                            'tour_category_id' => $category->id,
                            'name' => $package['name'],
                            'description' => $package['description'],
                            'images' => $package['images'],
                            'price' => $package['price'],
                            'duration' => $package['duration'],
                            'itinerary' => $package['itinerary'],
                            'accommodations' => $package['accommodations'],
                            'meals' => $package['meals'],
                            'transportation' => $package['transportation'],
                            'tour_guides' => $package['tour_guides'],
                            'status' => 1,
                        ]);
                    }
                }


            }
        }
    }
}
