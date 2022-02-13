<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'default_timezone' => 'Africa/Cairo',
            'phone' => '8484858845855',
            'email' => 'info@eggs-plus.com',
            'logo' => 'images/setting/2021111663103193630.png',
            'login_pg' => 'images/setting/2021111663103193630.png',
            'logo_login' => 'images/setting/2021111663103193630.png',
            'location' => null,
            'facebook' => 'https://www.facebook.com',
            'twitter' => null,
            'instagram' => null,
            'pinterest' => null,
            'snapchat' => null,
            'telegram' => null,
            'youtube' => null,
            'site_name' => 'منصة ثقف',
            'address' => 'Test',
            'sm_description' => 'small description about application',
            'copyright' => 'جميع الحقوق محفوظة منصة بيض، تنفيذ و تطوير بواسطة',
            'copyright_link_text' => 'منصة ثقف',
            'copyright_link' => 'http://www.google.com',
        ];


        Setting::setMany($data);
    }
}
