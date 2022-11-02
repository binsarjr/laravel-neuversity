<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(Request $req)
    {
        if ($req->q) {
            $dosen = Dosen::where('nama', 'like', '%' . $req->q . '%')->get();
        } else {
            $dosen = Dosen::all();
        }
        $title = "Semua Dosen sadasdasd";
        // compact('dosen', 'title')
        // ['title' => $title,'dosen' => $dosen]
        return view('dosen', compact('dosen', 'title'));
    }
}
