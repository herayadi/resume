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
        // Ambil semua experience, urut dari yang TERBARU ke terlama
        $experiences = Experience::with(['client.company'])
            ->orderBy('startDate', 'desc')
            ->orderBy('id', 'desc')
            ->get();

        // dd($experiences[2]->client->company);

        // Jika kamu juga butuh daftar company & client untuk dropdown di admin nanti
        $companies = Company::with('clients')->get();
        $clients   = Client::all();
        
                // dd($companies);

        return view('home',[
            'user'=>$users->first(),
            'sosmeds'=>$sosmeds,
            'experiences'=>$experiences
        ]);
    }
}
