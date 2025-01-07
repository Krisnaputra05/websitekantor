<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;

class ConsultationController extends Controller
{
    public function index()
    {
        return view('pages.consultation');
    }

    public function store(Request $request)
    {
        $consultation = Consultation::create($request->all());
        return redirect()->back()->with('success', 'Consultation request submitted successfully!');
    }
}
