<?php

namespace App\Http\Controllers;
use App\Models\Karyawan;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        return view('pages.karyawan.index', [
            'karyawans' => Karyawan::all()
        ]);
    }

    public function create()
    {
        return view('pages.karyawan.create');
    }
}
