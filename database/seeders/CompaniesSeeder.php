<?php

namespace Database\Seeders;

use app\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name' => 'PT. Indocyber Global Teknologi',
            'website' => 'https://www.indocyber.co.id/',
            'location' => 'Jakarta Barat, Indonesia',
        ]);

        Company::create([
            'name' => 'PT. Prima Karya Sarana Sejahtera (PKSS)',
            'website' => 'https://pkss.co.id/',
            'location' => 'Jakarta Selatan, Indonesia',
        ]);
    }
}
