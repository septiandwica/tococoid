<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('roles')->insert([
            ['name' => 'Developer'],
            ['name' => 'Admin'],
        ]);
        DB::table('users')->insert([
            [
                'role_id' => 1,
                'name' => 'Tian Code',
                'username' => 'tiancode',
                'email' => 'mail@tiancode.my.id',
                'password' => bcrypt('12341234'),
            ],
            [
                'role_id' => 2,
                'name' => 'Alfito Yuro',
                'username' => 'alfito.yuro',
                'email' => 'alfitoyuro@tiancode.my.id',
                'password' => bcrypt('12341234'),
            ],
            
        ]);

        DB::table('general_pages')->insert([
            'slug' => Str::slug('Home Page'),
            'title' => 'Home Page',
            'meta_title' => 'Home Page Meta Title',
            'meta_description' => 'Description of the Home Page.',
            'meta_keywords' => 'home, page, keywords',
            'home_img' => 'home-page.jpg',
            'about_description' => 'This is a description about us.',
            'about_vission' => 'Our vision is to...',
            'about_mission' => 'Our mission is to...',
            'contact_email' => 'contact@example.com',
            'contact_phone' => '+1234567890',
            'contact_ig' => 'instagram_handle',
            'contact_linkedin' => 'linkedin_profile',
            'contact_tiktok' => 'tiktok_handle',
            'contact_location' => '1234 Main St, Anytown, USA',
        ]);
    }
}
