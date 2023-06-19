<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataFeed;
use Carbon\Carbon;
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

}
