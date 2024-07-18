<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $proyek = Proyek::all();
        $testimoni = Testimonial::all();
        return view('landingPage.index', compact('proyek', 'testimoni'));
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
