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
            'name'=>'Regina Septianadrah',
            'phoneNum'=>'(62)81295656710',
            'dob'=>'06/09/1996',
            'website'=>'reginaseptianadrah.great-site.net',
            'city'=>'Jakarta Selatan, DKI Jakarta, Indonesia',
            'role'=>'BIM Modeler',
            'summary'=>'Highly skilled Structural Drafter with over nine years of experience in the architecture, engineering, and construction industry, specializing in Revit, AutoCAD, and advanced Point Cloud integration to deliver precise, compliant structural models and drawings. Adept at collaborating directly with BIM leadership, meeting tight deadlines, and adapting to evolving design requirements across both local and international projects.',
            'pict'=>'regina-profile-img.jpg',
        ]);
    }
}
