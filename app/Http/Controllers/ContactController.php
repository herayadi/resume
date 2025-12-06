<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
public function store(Request $request)
    {
        // Validasi
        $data = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:100',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|max:2500',
        ]);

        // dd($data);

        // Kirim email ke kamu
        Mail::to('herirahmatsuryadi@gmail.com')->send(new ContactMail($data));

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['message' => 'Your message has been sent. Thank you!']);
        }
        
        return back()->with('success', 'Your message has been sent. Thank you!');
    }
}
