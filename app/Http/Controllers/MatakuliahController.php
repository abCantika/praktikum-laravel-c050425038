<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\User;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::with('dosen')->get();
        return view('matakuliah.index', compact('matakuliah'));
    }

    public function create()
    {
        $dosens = User::all();
        return view('matakuliah.create', compact('dosens'));
    }

    public function store(Request $request)
    {
        Matakuliah::create($request->all());
        return redirect('/matakuliah');
    }
}