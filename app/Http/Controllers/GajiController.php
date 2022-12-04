<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gaji;

class GajiController extends Controller
{
    public function index()
    {
        return view('pages.gaji.index', [
            'gajis' => Gaji::all()
        ]);
    }
}
