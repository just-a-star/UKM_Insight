<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ukm;
class UkmController extends Controller
{
    public function index()
    {
        $ukms = Ukm::with('anggota')->get();

        return view('ukm', compact('ukms'));
    }
}