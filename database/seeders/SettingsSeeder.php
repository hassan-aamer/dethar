<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{

    public function run(): void
    {
        $data = [
            'name' => [
                'ar' => 'website',
                'en' => 'website'
            ],
            'title' => [
                'ar' => 'website',
                'en' => 'website'
            ],
            'email' => 'website@gmail.com',
            'about' => [
                'ar' => 'website',
                'en' => 'website'
            ],
            'description' => [
                'ar' => 'website',
                'en' => 'website'
            ],
            'address' => [
                'ar' => 'Makanak Office Space - Sheikh Zayed',
                'en' => 'Makanak Office Space - Sheikh Zayed'
            ],

            'phone' => '+201129730475',
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.7533895537704!2d31.23429402382538!3d30.043932118593844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840ce4e765e11%3A0x3aabc54aa10fb3d!2z2KfZhNiq2K3YsdmK2LE!5e0!3m2!1sar!2seg!4v1750674118688!5m2!1sar!2seg',
            'whatsapp' => '+201001151306',
            'facebook' => 'https://website.test/',
            'linkedIn' => 'https://website.test/',
            'instagram' => 'https://website.test/',

            'copyrights' => [
                'ar' => 'All rights reserved to website © 2025',
                'en' => 'All rights reserved to website © 2025'
            ],
            'updated_at' => now(),
        ];

        $setting = Setting::first();

        if ($setting) {
            $setting->update($data);
        } else {
            Setting::create(array_merge($data, [
                'created_at' => now(),
            ]));
        }
    }
}
