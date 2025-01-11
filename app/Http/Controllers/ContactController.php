<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Data dummy untuk tampilan
        $contact = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'message' => 'Hello, this is a hardcoded message.',
            'created_at' => now(),
        ];

        return view('pages.contact', compact('contact'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Data dummy - simulasi penyimpanan
        $submittedData = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => now(),
        ];

        // Kirim kembali ke halaman dengan data dummy
        return redirect()->route('contact')->with('success', 'Your message has been submitted!');
    }
}
