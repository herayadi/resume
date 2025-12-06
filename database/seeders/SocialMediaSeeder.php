<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Email
         SocialMedia::create([
            'type'=>'email',
            'href'=>'herirahmatsuryadi@gmail.com',
            'label'=>'herirahmatsuryadi@gmail.com',
            'icon'=>'bi bi-envelope',
        ]);

        // LinkedIn
         SocialMedia::create([
            'type'=>'linkedin',
            'href'=>'https://www.linkedin.com/in/heri-rahmat-suryadi/',
            'label'=>'Heri Rahmat Suryadi',
            'icon'=>'bi bi-linkedin',
        ]);

        // Github
         SocialMedia::create([
            'type'=>'github',
            'href'=>'https://github.com/herayadi/',
            'label'=>'Heri Rahmat',
            'icon'=>'bi bi-github',
        ]);
    }
}
