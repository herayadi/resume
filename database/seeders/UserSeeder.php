<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Heri Rahmat Suryadi',
            'phoneNum'=>'(62)85179979609',
            'dob'=>'14/12/1997',
            'website'=>'heri-rahmat.great-site.net',
            'city'=>'Jakarta Barat, DKI Jakarta, Indonesia',
            'role'=>'Webmethods Developer, API and ESB Expert',
            'summary'=>'Results-oriented Middleware Developer with deep expertise in webMethods and enterprise integration. Passionate about crafting robust, scalable systems that enhance performance and streamline operations. Adept at designing APIs, managing ESB environments, and executing seamless data migrations to support business agility and growth.',
            'pict'=>'heri.jpg',
            'map'=>'https://maps.app.goo.gl/xbjvQuEevdkiZRKK7'
        ]);
    }
}
