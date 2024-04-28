<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        Setting::truncate();

        // Seed new data
        Setting::create([
            'app_name' => 'Jim Corbett',
            'email' => 'harshitajoshi@gmail.com',
            'whatsapp' => '+91 7983013274',
            'contact' => '+91 7983013274',
            'address' => 'Jim Corbett Nation Park Ranikhek Road, Ramnagar, Discrict-National, Utteakhand, 244715',
            'header_image' => 'assets/images/header-logo.png',
        ]);
    }
}
