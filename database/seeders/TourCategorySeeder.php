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
                            'description' => "Embark on an unforgettable adventure with our Jeep Safari Online Booking service at Jim Corbett National Park. Our easy-to-use platform lets you secure your safari experience effortlessly, offering various tariff options to fit every budget. Explore Corbett's diverse landscapes and wildlife, from the dense forests of Dhikala to the grasslands of Bijrani, guided by experienced experts. Capture breathtaking moments of wildlife sightings and birdwatching while ensuring your safety aboard our specially equipped jeeps. Whether you're a solo traveller or with friends and family, a Jeep Safari in Jim Corbett National Park promises an exhilarating journey into the heart of the wild. Book online now and get ready for an adventure like no other.",
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
                            'description' => "Explore the majestic wilderness of Jim Corbett National Park with our Elephant Safari Online Booking service. Immerse yourself in nature aboard our gentle giants, guided by skilled mahouts through the park's lush forests and grasslands. Our hassle-free online platform offers a range of tariffs to suit every budget. Encounter Corbett's rich biodiversity, from towering elephants to elusive tigers, while enjoying a unique perspective from atop these magnificent creatures. Capture unforgettable moments and immerse yourself in the jungle's sights and sounds, all while ensuring your safety and comfort. Whether you're a wildlife enthusiast, a nature lover, or seeking adventure, an Elephant Safari in Jim Corbett National Park promises an enchanting experience. Book your safari online today and venture into the heart of India's wilderness.",
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
                            'description' => "Experience an exhilarating adventure through the captivating landscapes of Jim Corbett National Park with our Dhikala Canter Safari Online Booking service. Discover the wilderness from the comfort of our spacious canters, accompanied by expert guides who reveal the secrets of the forest. Our user-friendly online platform ensures seamless reservation with a range of tariff options to cater to every budget. Traverse Corbett's diverse terrain, from dense forests to expansive grasslands, and encounter a plethora of wildlife species along the way. Capture captivating moments of wildlife sightings and immerse yourself in the park's natural beauty while prioritizing your safety and enjoyment throughout the safari. Whether you're traveling solo, with a partner, or accompanied by friends and family, a Dhikala Canter Safari guarantees an unforgettable journey into the heart of India's oldest national park. Book your safari online today and get ready for the adventure of a lifetime.",
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
                            'description' => "Experience the enchantment of the wilderness beneath the starry sky with our Night Stay Accommodation Online Booking service in Jim Corbett National Park. Immerse yourself in the serenity of nature as you reserve your stay amidst the park's tranquil surroundings. Our online platform provides convenient booking options with diverse tariffs to suit every traveller’s preferences and budget. Choose from a variety of accommodation options, including cozy forest lodges, luxurious resorts, and charming cottages, each offering a unique blend of comfort and relaxation. Whether you seek a secluded retreat or a lively ambiance, our night stay accommodations cater to all tastes. Delight in delectable local cuisine, unwind by a crackling bonfire, and revel in the nocturnal symphony of the jungle. Book your night stay accommodation online today and prepare for an enchanting sojourn in the heart of India's wilderness.",
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
                    'package' => [
                        [
                            // 'tour_category_id' => 2,
                            'name' => 'Corbett Budget Tour',
                            'description' => "Corbett National Park is considered as one of the most expensive places in North India. So here we are offering the Budget Tour Package in Corbett National Park with the best possible price which will not burden your pocket.",
                            'images' => 'assets/frontend/img/packages/corbett-budget-tour-290x290.webp',
                            'price' => 3500,
                            'duration' => '01 Night / 02 Days, Delhi - Corbett - Delhi',
                            'itinerary' => 'Itinerary for Package 1',
                            'accommodations' => 'Accommodations for Package 1',
                            'meals' => 'Meals for Package 1',
                            'transportation' => 'Transportation for Package 1',
                            'tour_guides' => 'Tour guides for Package 1',
                            'status' => 1,
                        ],

                        [
                            // 'tour_category_id' => 2,
                            'name' => 'Dhikala Tiger Tracing Tour',
                            'description' => "Dhikala is one of the most popular sought after tourist accommodation place in Corbett National Park and tracing the tiger in the most thrilling activity you can possibly do in Jeep(Gypsy), Elephant & Canter.",
                            'images' => 'assets/frontend/img/packages/dhikala-tiger-tour-290x290.webp',
                            'price' => 8500,
                            'duration' => '03 Nights / 04 Days, Delhi - Dhikala - Delhi',
                            'itinerary' => 'Itinerary for Package 1',
                            'accommodations' => 'Accommodations for Package 1',
                            'meals' => 'Meals for Package 1',
                            'transportation' => 'Transportation for Package 1',
                            'tour_guides' => 'Tour guides for Package 1',
                            'status' => 1,
                        ],

                        [
                            // 'tour_category_id' => 2,
                            'name' => 'Dhikala Gairal Tour',
                            'description' => "After Dhikala, Gairal is the most preferred forest lodge amongst visitors which is located on the banks of Ramganga river. Gairal forest lodge have electricity for a few hours in the evening via generator.",
                            'images' => 'assets/frontend/img/packages/dhikala-weekend-tour-290x290.webp',
                            'price' => 8500,
                            'duration' => '02 Nights / 03 Days, Delhi - Dhikala - Gairal - Delhi',
                            'itinerary' => 'Itinerary for Package 1',
                            'accommodations' => 'Accommodations for Package 1',
                            'meals' => 'Meals for Package 1',
                            'transportation' => 'Transportation for Package 1',
                            'tour_guides' => 'Tour guides for Package 1',
                            'status' => 1,
                        ],

                        [
                            // 'tour_category_id' => 2,
                            'name' => 'Corbett Group Tour',
                            'description' => "Get special discounts for College Group / School Student Group / Corporate or Company Group / Call-Centre group (More than 20 persons), packages available as low as INR 1200-2500 per student or person respectively.",
                            'images' => 'assets/frontend/img/packages/corbett-group-tour-290x290.webp',
                            'price' => 1200,
                            'duration' => 'Customised, Delhi - Corbett - Delhi',
                            'itinerary' => 'Itinerary for Package 1',
                            'accommodations' => 'Accommodations for Package 1',
                            'meals' => 'Meals for Package 1',
                            'transportation' => 'Transportation for Package 1',
                            'tour_guides' => 'Tour guides for Package 1',
                            'status' => 1,
                        ],

                    ]
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
