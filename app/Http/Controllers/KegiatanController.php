<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataFeed;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class KegiatanController extends Controller
{
    public function kegiatan()
    {
        $dataFeed = new DataFeed();

        return view('pages/kegiatan/kegiatan', compact('dataFeed'));
    }
    public function partisipan(){
        $dataFeed = new DataFeed();

        return view('pages/kegiatan/partisipan', compact('dataFeed'));
    }

    public function getSkalaKegiatanDistribution()
{
    $skalaDistribution = DB::select("
        SELECT YEAR(tgl_pelaksanaan) AS year,
            SUM(CASE WHEN skala = 'Lokal' THEN 1 ELSE 0 END) AS lokal_kegiatan,
            SUM(CASE WHEN skala = 'Nasional' THEN 1 ELSE 0 END) AS nasional_kegiatan
        FROM kegiatan
        GROUP BY YEAR(tgl_pelaksanaan)
        ORDER BY YEAR(tgl_pelaksanaan) ASC
    ");

    return response()->json($skalaDistribution);
}


public function getPartisipanKegiatanDistribution()
{
    $partisipanDistribution = DB::select("
        SELECT YEAR(tgl_pelaksanaan) AS year,
            SUM(CASE WHEN partisipan_kegiatan.role = 'penanggung_jawab' THEN 1 ELSE 0 END) AS penanggung_jawab,
            SUM(CASE WHEN partisipan_kegiatan.role = 'anggota' THEN 1 ELSE 0 END) AS anggota
        FROM kegiatan
        INNER JOIN partisipan_kegiatan ON kegiatan.id = partisipan_kegiatan.kegiatan_id
        GROUP BY YEAR(tgl_pelaksanaan)
        ORDER BY YEAR(tgl_pelaksanaan) ASC
    ");
    // dd($partisipanDistribution);
    return response()->json($partisipanDistribution);
    
}

}