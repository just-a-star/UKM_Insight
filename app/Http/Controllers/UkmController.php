<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ukm;
use App\Models\Anggota;
use App\Models\Kegiatan;
use App\Models\PartisipanKegiatan;
use App\Models\Dana;
use Illuminate\Support\Facades\DB;
class UkmController extends Controller
{


    public function dasbor($id = null){
        if ($id == null) {
            return redirect()->route('ukm.list');
        }
       
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

    


}