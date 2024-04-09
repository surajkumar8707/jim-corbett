<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HomePageCarousel;

class HomePageCarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $default_carousels = array(
            [
                'title' => 'Dhikala Tiger Tracing Tour in Jim Corbett National Park',
                'image' => "assets/frontend/img/carousel/banner-image-15.webp",
                'status' => 1,
            ],

            [
                'title' => 'Corbett Resort in Jim Corbett National Park',
                'image' => "assets/frontend/img/carousel/corbett-pic4.jpg",
                'status' => 1,
            ],

            [
                'title' => 'Garjiya Mandir Ramnagar, Uttarakhand',
                'image' => "assets/frontend/img/carousel/corbett-gariya-devi-temple.jpg.imgw_.1280.1280.jpeg",
                'status' => 1,
            ],

            [
                'title' => 'Kedarnath, Rudraprayag',
                'image' => "assets/frontend/img/carousel/kedarnath_rudraprayag.jpg",
                'status' => 1,
            ],

        );

        if(count($default_carousels) > 0){
            foreach($default_carousels as $carousel){
                HomePageCarousel::create(array(
                    'title' => $carousel['title'],
                    'image' => $carousel['image'],
                    'status' => $carousel['status'],
                ));
            }
        }
    }
}
