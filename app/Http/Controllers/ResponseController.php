<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function index()
    {
        return view('respon.index', [
            'respon' => Response::all()->sortByDesc('id_respon'),
    ]);
    }

    public function store(Request $request)
    {
        // var_dump($request->all());
        // exit;
        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'pesan' => 'required',
        ]);

        Response::create($request->all());

        return redirect('/');
    }
}
