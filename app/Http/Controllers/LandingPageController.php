<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{
    public function index()
    {
        $proyek = Proyek::all();
        $testimoni = Testimonial::all();
        $user = Auth::user();
        return view('landingPage.index', compact('proyek', 'testimoni', 'user'));
    }

    public function detail($id_proyek)
    {
        $tigaProyek = Proyek::all()->take(3);
        $proyek = Proyek::with('gambarProyek')
        ->where('id_proyek', $id_proyek)
        ->firstOrFail();
        return view('landingPage.detail', compact('proyek', 'tigaProyek'));
    }
}
