<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ukm;
use App\Models\Anggota;
use App\Models\Kegiatan;
use App\Models\PartisipanKegiatan;
use App\Models\Dana;
use App\Models\FeedbackKegiatan;


use Illuminate\Support\Facades\DB;
class UkmController extends Controller
{


    public function dasbor($id = null){
        if ($id == null) {
            return redirect()->route('ukm-list');
        }
        $dataKegiatan = $this->getKegiatanPeriodeIni($id);
       return view('pages.ukm.ukm-dasbor', compact('id','dataKegiatan'));
    }

    public function show($id)
    {
        $ukm = Ukm::findOrFail($id);
        return view('pages.ukm.ukm-dasbor', compact('ukm'));
    }


public function getUkmListJson()
{
    $ukms = Ukm::select('id', 'nama', 'deskripsi')->get();

    $ukmList = [];
    foreach ($ukms as $ukm) {
        $ketua = Anggota::where('ukm_id', $ukm->id)
            ->where('posisi', 'Leader')
            ->value('nama');
        $totalAnggota = Anggota::where('ukm_id', $ukm->id)->count();

        $totalPengeluaran = Dana::where('ukm_id', $ukm->id)
            ->whereBetween('waktu_transaksi', ['2023-01-01', '2024-12-31'])
            ->sum('dana');

        $kegiatanPeriodeIni = Kegiatan::where('ukm_id', $ukm->id)
            ->whereBetween('tgl_pelaksanaan', ['2023-01-01', '2024-12-31'])
            ->count();

        $ukmList[] = [
            'name' => $ukm->nama,
            'deskripsi' => $ukm->deskripsi,
            'ketua' => $ketua,
            'total_anggota' => $totalAnggota,
            'pengeluaran_periode_ini' => $totalPengeluaran,
            'kegiatan_periode_ini' => $kegiatanPeriodeIni,
        ];
    }

    return response()->json($ukmList);
}

public function getUkmList()
{
    $ukms = Ukm::select('id', 'nama', 'deskripsi')->get();

    $ukmList = [];
    foreach ($ukms as $ukm) {
        $ketua = Anggota::where('ukm_id', $ukm->id)
            ->where('posisi', 'Leader')
            ->value('nama');
        $totalAnggota = Anggota::where('ukm_id', $ukm->id)->count();

        $totalPengeluaran = Dana::where('ukm_id', $ukm->id)
            ->whereBetween('waktu_transaksi', ['2023-01-01', '2024-12-31'])
            ->sum('dana');

        $kegiatanPeriodeIni = Kegiatan::where('ukm_id', $ukm->id)
            ->whereBetween('tgl_pelaksanaan', ['2023-01-01', '2024-12-31'])
            ->count();

        $ukmList[] = [
            'id' => $ukm->id,
            'name' => $ukm->nama,
            'deskripsi' => $ukm->deskripsi,
            'ketua' => $ketua,
            'total_anggota' => $totalAnggota,
            'pengeluaran_periode_ini' => $totalPengeluaran,
            'kegiatan_periode_ini' => $kegiatanPeriodeIni,
        ];
    }

    return $ukmList;
}

public function list()
{
    $ukmList = $this->getUkmList();
    
    return view('pages.ukm.ukm-list', compact('ukmList'));
}

// public function getUkmDetail($id)
// {
//     $ukm = Ukm::findOrFail($id);

//     $ketua = Anggota::where('ukm_id', $ukm->id)
//         ->where('posisi', 'Leader')
//         ->value('nama');

//     $totalAnggota = Anggota::where('ukm_id', $ukm->id)->count();

//     $totalPengeluaran = Dana::where('ukm_id', $ukm->id)
//         ->whereBetween('waktu_transaksi', ['2023-01-01', '2024-12-31'])
//         ->sum('dana');

//     $kegiatanPeriodeIni = Kegiatan::where('ukm_id', $ukm->id)
//         ->whereBetween('tgl_pelaksanaan', ['2023-01-01', '2024-12-31'])
//         ->count();

//     $ukmDetail = [
//         'id' => $ukm->id,
//         'name' => $ukm->nama,
//         'deskripsi' => $ukm->deskripsi,
//         'ketua' => $ketua,
//         'total_anggota' => $totalAnggota,
//         'pengeluaran_periode_ini' => $totalPengeluaran,
//         'kegiatan_periode_ini' => $kegiatanPeriodeIni,
//     ];

//     return $ukmDetail;
// }
// use App\Models\Anggota;

// use App\Models\Anggota;

// use App\Models\PartisipanKegiatan;
// use App\Models\Anggota;

public function getKegiatanPeriodeIniJson($id)
{
    // Retrieve the UKM by ID
    $ukm = Ukm::findOrFail($id);

    // Calculate the start and end dates for the past year
    $endDate = now()->endOfMonth();
    $startDate = $endDate->copy()->subYear()->startOfMonth();

    // Retrieve the kegiatan data for the past year specific to the UKM
    $kegiatanPeriodeIni = $ukm->kegiatan()
        ->whereBetween('tgl_pelaksanaan', [$startDate, $endDate])
        ->with(['feedbackKegiatan' => function ($query) {
            $query->select('kegiatan_id', 'rating');
        }])
        ->with(['dana' => function ($query) {
            $query->select('kegiatan_id', 'dana', 'tipe_transaksi');
        }])
        ->get(['id', 'nama', 'tgl_pelaksanaan']);

    // Prepare the data for response
    $data = [];

    foreach ($kegiatanPeriodeIni as $kegiatan) {
        $penanggungJawab = $this->getPenanggungJawabForKegiatan($kegiatan->id);
        $averageRating = $this->calculateAverageRating($kegiatan->feedbackKegiatan);

        $danaDikeluarkan = $kegiatan->dana->where('tipe_transaksi', 'Pengeluaran')->sum('dana');
        $pendapatan = $kegiatan->dana->where('tipe_transaksi', 'Pendapatan')->sum('dana');

        $data[] = [
            'nama_kegiatan' => $kegiatan->nama,
            'tanggal_pelaksanaan' => $kegiatan->tgl_pelaksanaan,
            'penanggung_jawab' => $penanggungJawab,
            'rating_feedback' => $averageRating,
            'dana_kegiatan' => $danaDikeluarkan,
            'pendapatan' => $pendapatan,
        ];
    }

    return response()->json($data);
}

public function getKegiatanPeriodeIni($id)
{
    // Retrieve the UKM by ID
    $ukm = Ukm::findOrFail($id);

    // Calculate the start and end dates for the past year
    $endDate = now()->endOfMonth();
    $startDate = $endDate->copy()->subYear()->startOfMonth();

    // Retrieve the kegiatan data for the past year specific to the UKM
    $kegiatanPeriodeIni = $ukm->kegiatan()
        ->whereBetween('tgl_pelaksanaan', [$startDate, $endDate])
        ->with(['feedbackKegiatan' => function ($query) {
            $query->select('kegiatan_id', 'rating');
        }])
        ->with(['dana' => function ($query) {
            $query->select('kegiatan_id', 'dana', 'tipe_transaksi');
        }])
        ->get(['id', 'nama', 'tgl_pelaksanaan']);

    // Prepare the data for response
    $data = [];

    foreach ($kegiatanPeriodeIni as $kegiatan) {
        $penanggungJawab = $this->getPenanggungJawabForKegiatan($kegiatan->id);
        $averageRating = $this->calculateAverageRating($kegiatan->feedbackKegiatan);

        $danaDikeluarkan = $kegiatan->dana->where('tipe_transaksi', 'Pengeluaran')->sum('dana');
        $pendapatan = $kegiatan->dana->where('tipe_transaksi', 'Pendapatan')->sum('dana');

        $data[] = [
            'nama_kegiatan' => $kegiatan->nama,
            'tanggal_pelaksanaan' => $kegiatan->tgl_pelaksanaan,
            'penanggung_jawab' => $penanggungJawab,
            'rating_feedback' => $averageRating,
            'dana_kegiatan' => $danaDikeluarkan,
            'pendapatan' => $pendapatan,
        ];
    }

    return $data;
}

public function kegiatanPeriodeIni($id)
{
    $dataKegiatan = $this->getKegiatanPeriodeIni($id);
    
    return view('pages.ukm.ukm-dasbor', compact('dataKegiatan'));
}



private function getPenanggungJawabForKegiatan($kegiatanId)
{
    $penanggungJawabIds = PartisipanKegiatan::where('kegiatan_id', $kegiatanId)
        ->where('role', 'penanggung_jawab')
        ->pluck('anggota_id');

    $penanggungJawab = Anggota::whereIn('id', $penanggungJawabIds)->pluck('nama')->toArray();

    return $penanggungJawab;
}

private function calculateAverageRating($feedbacks)
{
    $totalRating = 0;
    $count = $feedbacks->count();

    if ($count > 0) {
        $totalRating = $feedbacks->sum(function ($feedback) {
            return $this->convertRatingToNumeric($feedback->rating);
        });

        return $totalRating / $count;
    }

    return 0;
}

private function convertRatingToNumeric($rating)
{
    $ratingValues = [
        'Poor' => 0,
        'Fair' => 25,
        'Good' => 50,
        'Excellent' => 100,
    ];

    return $ratingValues[$rating] ?? 0;
}




















}