<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataFeed;
use App\Models\Kegiatan;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class KegiatanController extends Controller
{
    public function kegiatan()
    {
        $dataKegiatan = $this->getKegiatanData();
        
        return view('pages/kegiatan/kegiatan', compact('dataKegiatan'));
    }
    
    public function getKegiatanData()
    {
        $kegiatan = Kegiatan::all();
        
        return $kegiatan;
    }
    public function getKegiatanDataById($id)
    {
        $kegiatan = DB::select("
            SELECT kegiatan.id, kegiatan.nama_kegiatan, kegiatan.tgl_pelaksanaan, kegiatan.skala, kegiatan.lokasi, kegiatan.keterangan, kegiatan.created_at, kegiatan.updated_at, users.name
            FROM kegiatan
            INNER JOIN users ON kegiatan.user_id = users.id
            WHERE kegiatan.id = $id
        ");
        return response()->json($kegiatan);
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