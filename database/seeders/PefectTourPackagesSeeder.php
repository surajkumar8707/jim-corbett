<?php

namespace Database\Seeders;

use App\Models\PefectTourPackages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PefectTourPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
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
            // Add more packages as needed
        ];

        foreach ($packages as $package) {
            PefectTourPackages::create($package);
        }
    }
}
