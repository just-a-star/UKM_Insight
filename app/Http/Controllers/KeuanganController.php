<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataFeed;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function keuangan()
    {
        $dataFeed = new DataFeed();

        return view('pages/keuangan/keuangan', compact('dataFeed'));
    }
    public function dana(){
        $dataFeed = new DataFeed();

        return view('pages/keuangan/dana', compact('dataFeed'));
    }
}
