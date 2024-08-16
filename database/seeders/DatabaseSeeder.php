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
            'about_description' => 'PT Tococo Indonesia Berkah excels in premium Indonesian grocery production, specializing in coconuts commodity. Committed to excellence, we prioritize quality maintenance from cultivation to processing, collaborating closely with local farmers for sustainable practices. Our dedication extends to stringent quality control and community engagement, reflecting our commitment to excellence, sustainability, and community welfare.',
            'about_vission' => 'To acquire Indonesian agricultural commodities to be known around the world',
            'about_mission' => '<ul>
            <li class="p1">To produce truly globally quality agricultural products</li>
            <li class="p1">Meet the needs of agricultural products at the request of the buyer</li>
            <li class="p1">Empowering local farmers</li>
            </ul>',
            'contact_email' => 'tococoindonesia',
            'contact_phone' => '+1234567890',
            'contact_ig' => 'tococoindonesia.id',
            'contact_linkedin' => 'linkedin_profile',
            'contact_tiktok' => 'tiktok_handle',
            'contact_location' => '1234 Main St, Anytown, USA',
        ]);
    }
}
