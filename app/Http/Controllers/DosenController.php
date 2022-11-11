<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DosenController extends Controller
{
    static $coba = 'ini coba';
    static public function coba()
    {
        return "ini dari stsatic function";
    }
    public function index(Request $req)
    {

        if ($req->q) {
            // SELECT * FROM dosens WHERE nama like '%{$q}%';
            $dosen = Dosen::where('nama', 'like', '%' . $req->q . '%')->get();
        } else {
            // SELECT * FROM dosens;
            $dosen = Dosen::all();
        }
        $title = "Semua Dosen";
        // compact('dosen', 'title')
        // ['title' => $title,'dosen' => $dosen]
        return view('dosen', compact('dosen', 'title'));
    }


    public function create()
    {
        return view('dosen.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'kelamin' => 'required',
            'sudah_menikah' => 'required',
            'alamat' => 'required',
        ]);
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);
        $created = Dosen::create($data);
        return redirect('/dosen');
    }


    public function edit(Dosen $dosen)
    {
        // ['dosen' => $dosen]
        // compact('dosen')
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Dosen $dosen, Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'kelamin' => 'required',
            'sudah_menikah' => 'required',
            'alamat' => 'required',
        ]);
        $request->merge([
            'slug' => Str::slug($request->nama)
        ]);
        $dosen->update($request->all());

        return redirect('/dosen');
    }


    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect('/dosen');
    }
}
