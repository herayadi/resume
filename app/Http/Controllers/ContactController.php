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
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // dd($data);

        // Kirim email ke kamu
        Mail::to('herirahmatsuryadi@gmail.com')->send(new ContactMail($data));

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['message' => 'Pesan berhasil dikirim!']);
        }
        
        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}
