<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\GambarProyek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade

class GambarProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        // Fetch projects and their images from the database
        $projects = DB::table('proyek')
            ->join('gambar_proyek', 'proyek.id_proyek', '=', 'gambar_proyek.id_proyek')
            ->select('proyek.id_proyek', 'proyek.nama_proyek', 'gambar_proyek.gambar_proyek')
            ->get()
            ->groupBy('id_proyek');

        // Format the data as needed
        $projectImages = [];
        foreach ($projects as $id => $projectGroup) {
            $projectImages[$id]['nama_proyek'] = $projectGroup->first()->nama_proyek;
            foreach ($projectGroup as $project) {
                $projectImages[$id]['images'][] = $project->gambar_proyek;
            }
        }

        return view('gambarProyek.index', compact('projectImages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proyek = Proyek::all();
        return view('gambarProyek.create', compact('proyek'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'gambar_proyek.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $id_proyek = $request->id_proyek;

    if ($request->hasFile('gambar_proyek')) {
        $files = $request->file('gambar_proyek');

        foreach ($files as $file) {
            $photoName = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('images'), $photoName);

            $fields = [
                'id_proyek' => $id_proyek,
                'gambar_proyek' => $photoName,
            ];

            GambarProyek::create($fields);
        }
    }

    return redirect('/gambarProyek')->with('create', 'Gambar berhasil ditambahkan');
}


    /**
     * Display the specified resource.
     */
    public function show(GambarProyek $gambarProyek)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit($id_proyek)
    {
        // Fetch the project by id_proyek
        $proyek = Proyek::with('gambarProyek')
        ->where('id_proyek', $id_proyek)
        ->firstOrFail();
        return view('gambarProyek.edit', compact('proyek'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GambarProyek $gambarProyek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GambarProyek $gambarProyek)
    {
        $gambarProyek->delete();
        return redirect('/gambarProyek')->with('hapus', 'Gambar berhasil dihapus');
    }
}
