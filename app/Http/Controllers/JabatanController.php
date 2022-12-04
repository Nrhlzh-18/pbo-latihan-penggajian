<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function index()
    {
        return view('pages.jabatan.index', [
            'jabatans'  => Jabatan::all()
        ]);
    }

    public function create()
    {
        return view('pages.jabatan.create');
    }
}
