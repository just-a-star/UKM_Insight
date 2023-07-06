<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use Illuminate\Support\Facades\DB;
use App\Models\Ukm;
use App\Models\Kegiatan;


class DasborController extends Controller
{
    public function index()
    {
        
        return view('pages/dasbor/dasbor');
    }

    public function getTotalUkm(){
        return Ukm::count();
    }

    public function getTotalUkmAktif(){
        $activeUkms = DB::select("
        SELECT COUNT(DISTINCT ukm.id) AS total_ukm_aktif
        FROM ukm
        INNER JOIN kegiatan ON ukm.id = kegiatan.ukm_id
        WHERE kegiatan.tgl_pelaksanaan >= DATE_SUB(NOW(), INTERVAL 6 MONTH)
    ");
    $activeUkms[0]->total_ukm_aktif;
    return response()->json($activeUkms);
    }

    public function getTotalUkmTidakAktif(){
        $activeUkms = DB::select("
        SELECT COUNT(DISTINCT ukm.id) AS total_ukm_tidak_aktif
        FROM ukm
        INNER JOIN kegiatan ON ukm.id = kegiatan.ukm_id
        WHERE kegiatan.tgl_pelaksanaan < DATE_SUB(NOW(), INTERVAL 6 MONTH)"
        );
        $activeUkms[0]->total_ukm_tidak_aktif;
        return response()->json($activeUkms);
    }

    public function getTotalUkmStatus()
{
    $activeUkms = DB::select("
        SELECT
            COUNT(DISTINCT CASE WHEN kegiatan.tgl_pelaksanaan >= DATE_SUB(NOW(), INTERVAL 6 MONTH) THEN ukm.id END) AS total_ukm_aktif,
            COUNT(DISTINCT CASE WHEN kegiatan.tgl_pelaksanaan < DATE_SUB(NOW(), INTERVAL 6 MONTH) THEN ukm.id END) AS total_ukm_tidak_aktif
        FROM ukm
        INNER JOIN kegiatan ON ukm.id = kegiatan.ukm_id
    ");

    $result = [
        'total_ukm_aktif' => $activeUkms[0]->total_ukm_aktif,
        'total_ukm_tidak_aktif' => $activeUkms[0]->total_ukm_tidak_aktif,
    ];

    return response()->json($result);
}

public function getPopularActivities()
{
    $popularActivities = DB::select("
    SELECT
        kegiatan.id,
        kegiatan.nama,
        COUNT(partisipan_kegiatan.id) AS total_partisipan
    FROM kegiatan
    LEFT JOIN partisipan_kegiatan ON kegiatan.id = partisipan_kegiatan.kegiatan_id
    GROUP BY kegiatan.id, kegiatan.nama
    ORDER BY total_partisipan DESC
    LIMIT 5
");



    return response()->json($popularActivities);

}
}