<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = collect([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => 'admin@123',
            ],
        ]);

        $admins->each(function($admin){
            $exist = Admin::where('email', $admin['email'])->first();
            if(empty($exist)){
                Admin::firstOrCreate([
                    'name' => $admin['name'],
                    'email' => $admin['email'],
                    'password' => bcrypt($admin['password']),
                ]);
            }
        });
    }
}
