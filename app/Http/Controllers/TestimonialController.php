<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimoni = Testimonial::all();
        return view('testimoni.index', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proyek = Proyek::all();
        return view('testimoni.create', compact('proyek'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photo = null;
        $request->validate([
            'gambar_testimoni' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $photo = time().'-'.$request->gambar_testimoni->getClientOriginalName();
        $request->gambar_testimoni->move(public_path('images'), $photo);
        Testimonial::create([
            'id_proyek' => $request->id_proyek,
            'deskripsi_testimoni' => $request->deskripsi_testimoni,
            'gambar_testimoni' => $photo,
        ]);
           return redirect('/testimoni')->with('create', 'Testimonial berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimoni)
    {
        $proyek = Proyek::all();
        return view('testimoni.edit', compact('testimoni', 'proyek'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimoni)
    {
        // dd($request->all());
       $field =[
            'id_proyek' => $request->id_proyek,
            'deskripsi_testimoni' => $request->deskripsi_testimoni,
        ];
        $photo = null;
        if($request->gambar_testimoni){
            $request->validate([
                'gambar_testimoni' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $photo = time().'-'.$request->gambar_testimoni->getClientOriginalName();
            $request->gambar_testimoni->move(public_path('images'), $photo);
            $field['gambar_testimoni'] = $photo;
        }
        // dd($field);
        $testimoni->update($field);
        return redirect('/testimoni')->with('update', 'Testimonial berhasil diubah'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimoni)
    {
        $testimoni->delete();
        return redirect('/testimoni')->with('hapus', 'Testimonial berhasil dihapus');
    }
}
