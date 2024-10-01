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
            'about_description' => 'PT. Tococo Indonesia Berkah is a sole proprietorship established on November 20, 2020, in Banyumas Regency, Indonesia. We are committed to utilizing every part of the coconut to create innovative products through a zero-waste concept. The company began its journey by producing coconut chips in 2020 and has since expanded to various other innovative derivative products such as coconut oil, chocolate, coffee, sauce, and sugar. We have empowered several coconut farmers in Banyumas Regency and housewives to produce coconut derivative products and positively contribute to the local community. PT. Tococo Indonesia Berkah has obtained official legal status for all its products and actively markets them locally and internationally. Due to our dedication, the company has received various awards at both national and international levels.
',
            'about_vission' => 'To become a leading company in the coconut industry in Indonesia and internationally by optimizing the potential of coconuts through innovative, environmentally friendly, and sustainable products, while improving the welfare of coconut farmers across the archipelago.',
            'about_mission' => '<ul>
            <li class="p1">Develop innovative, high-quality, and environmentally friendly coconut products by utilizing every part of the coconut plant without waste (zero waste).</li>
            <li class="p1">Increase the productivity and quality of coconuts through education and training for farmers, as well as strengthening coconut farmer organizations.</li>
            <li class="p1">Expand market access for fresh coconut products and their derivatives, both in local and international markets.</li>
            <li class="p1">Collaborate with the government, private sector, and community organizations to create synergy in the development of the coconut industry.</li>
            <li class="p1">Build a strong business support system to assist key players in the coconut value chain.</li>
            <li class="p1">Provide products that support a healthy lifestyle for consumers by focusing on sustainability and social responsibility.</li>
            </ul>',
            'contact_email' => 'business@tococoindonesia.com',
            'contact_phone' => '+1234567890',
            'contact_ig' => 'tococoindonesia.id',
            'contact_linkedin' => 'linkedin_profile',
            'contact_tiktok' => 'tiktok_handle',
            'contact_location' => '1234 Main St, Anytown, USA',
        ]);
    }
}
