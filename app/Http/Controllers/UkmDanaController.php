<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use Illuminate\Http\Request;
use App\Models\DataFeed;
use Carbon\Carbon;
use App\Models\Ukm;
use App\Models\Dana;
class UkmDanaController extends Controller
{
    public function index($id)
    {
        $danaList = $this->getdanaList($id);

        return view('pages.ukm.ukm-dana', compact('danaList'));
    }

    public function getdanaList($id)
{
    $danaList = Dana::where('ukm_id', $id)->get();

    return $danaList;
}
public function getDanaJson($id)
{
    $danaList = $this->getdanaList($id);

    $data = [];

    foreach ($danaList as $dana) {
        $data[] = [
            'nama' => $dana->nama,
            'jumlah' => $dana->jumlah,
            'keterangan' => $dana->keterangan,
            'tgl_pengadaan' => $dana->tgl_pengadaan,
        ];
    }

    return response()->json($data);
}
}