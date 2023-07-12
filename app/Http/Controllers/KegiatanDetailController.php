<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\FeedbackKegiatan;
use Illuminate\Support\Facades\DB;
class KegiatanDetailController extends Controller
{
    public function detail($id)
    {
        $dataKegiatan = Kegiatan::with('partisipanKegiatan', 'feedbackKegiatan', 'dana')->findOrFail($id);
        // dd($dataKegiatan);
        return view('pages.kegiatan.kegiatan-detail', compact('dataKegiatan'));
    }

    public function getFeedbackKegiatanData(Request $request)
{
    $kegiatanId = $request->kegiatan_id;
    
    $feedbacks = FeedbackKegiatan::select('rating', DB::raw('COUNT(*) as count'))
        ->where('kegiatan_id', $kegiatanId)
        ->groupBy('rating')
        ->get();

    return response()->json($feedbacks);
}


}