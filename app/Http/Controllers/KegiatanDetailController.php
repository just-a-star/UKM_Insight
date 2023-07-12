<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kegiatan;

class KegiatanDetailController extends Controller
{
    public function detail($id)
    {
        $dataKegiatan = Kegiatan::with('partisipanKegiatan', 'feedbackKegiatan', 'dana')->findOrFail($id);
        // dd($dataKegiatan);
        return view('pages.kegiatan.kegiatan-detail', compact('dataKegiatan'));
    }
}