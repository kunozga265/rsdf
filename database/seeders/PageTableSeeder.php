<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'code'  => 'home',
            'photo' => 'images/pages/home.jpg',
        ]);
        Page::create([
            'code'  => 'our-activities',
            'photo' => 'images/pages/our-activities.jpg',
        ]);
        Page::create([
            'code'  => 'our-achievements',
            'photo' => 'images/pages/our-achievements.jpg',
        ]);
        Page::create([
            'code'  => 'partnerships',
            'photo' => 'images/pages/partnerships.jpg',
        ]);
        Page::create([
            'code'  => 'future-plans',
            'photo' => 'images/pages/future-plans.jpg',
        ]);
        Page::create([
            'code'  => 'news',
            'photo' => 'images/pages/news.jpg',
        ]);
        Page::create([
            'code'  => 'contact-info',
            'photo' => 'images/pages/contact-info.jpg',
        ]);
        Page::create([
            'code'  => 'ngo-management',
            'photo' => 'images/pages/ngo-management.jpg',
        ]);
        Page::create([
            'code'  => 'objectives',
            'photo' => 'images/pages/objectives.jpg',
        ]);
        Page::create([
            'code'  => 'funding-guarantee',
            'photo' => 'images/pages/funding-guarantee.jpg',
        ]);
        Page::create([
            'code'  => 'auth',
            'photo' => 'images/pages/auth.jpg',
        ]);
        Page::create([
            'code'  => 'rsdf-region-office',
            'photo' => 'images/pages/rsdf-region-office.jpg',
        ]);
        Page::create([
            'code'  => 'subscribers',
            'photo' => 'images/pages/subscribers.jpg',
        ]);
    }
}
