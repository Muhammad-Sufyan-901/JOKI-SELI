<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class LandingPageController extends Controller
{
    public function index()
    {
        $proyek = Proyek::all();
       $latestProyek = Proyek::orderBy('id_proyek', 'desc')->first();
        $testimoni = Testimonial::all();
        $user = Auth::user();
        return view('landingPage.index', compact('proyek', 'testimoni', 'user', 'latestProyek'));
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
