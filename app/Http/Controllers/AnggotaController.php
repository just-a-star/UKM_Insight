<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\DataFeed;
use Carbon\Carbon;
use App\Models\Ukm;

class AnggotaController extends Controller
{
    public function index()
    {
        $members = Anggota::where('ukm_id', 1)->get();

        return view('pages/anggota/anggota', compact('members'));
    }

    public function getTotalAnggotaPerAngkatan()
    {
        $random = Ukm::inRandomOrder()->first()->id;
        $members = Anggota::select('angkatan', DB::raw('count(*) as total_anggota'))
            ->with('ukm')
            ->where('ukm_id', 1)
            ->groupBy('angkatan') // Add the GROUP BY clause for 'angkatan' column
            ->get();
    
        return response()->json($members);
    }
}