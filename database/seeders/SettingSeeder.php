<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
// use DB;
use Illuminate\Support\Facades\DB;


class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'notification_settings_text' => 'Ahmed',
            'about_us' => 'Ahmed',
            'phone' => 'Ahmed',
            'email' => 'Ahmed',
            'fb_link' => 'Ahmed',
            'tw_link' => 'Ahmed',
            'youtube_link' => 'Ahmed',
            'inst_link' => 'Ahmed',
            'whatsapp_link' => 'Ahmed',
            'google_plus_link' => 'Ahmed',
        ]);
    }
}
