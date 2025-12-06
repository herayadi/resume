<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Client;
use App\Models\Company;
use App\Models\SocialMedia;
use App\Models\Experience;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        $sosmeds = SocialMedia::all();
        

        return view('home',[
            'user'=>$users->first(),
            'sosmeds'=>$sosmeds
        ]);
    }
}
