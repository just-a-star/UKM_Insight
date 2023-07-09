<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use Illuminate\Http\Request;
use App\Models\DataFeed;
use Carbon\Carbon;
class UkmAssetController extends Controller
{
    /**
     * Displays the dashboard screen
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $dataFeed = new DataFeed();

        return view('pages/ukm/asset', compact('dataFeed'));
    }

    public function getAssetList($id)
{
    $assetList = Asset::where('ukm_id', $id)->get();

    return $assetList;
}

public function getUkmAssetJson($id)
{
    $assetList = $this->getAssetList($id);

    $data = [];

    foreach ($assetList as $asset) {
        $data[] = [
            'nama' => $asset->nama,
            'jumlah' => $asset->jumlah,
            'keterangan' => $asset->keterangan,
            'tgl_pengadaan' => $asset->tgl_pengadaan,
        ];
    }

    return response()->json($data);
}
public function assetPage($id)
{
    $assetList = $this->getAssetList($id);
    

    return view('pages.ukm.ukm-aset', compact('assetList') );
}
}