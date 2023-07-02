<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use Illuminate\Support\Facades\DB;


class DasborController extends Controller
{
    public function index()
    {
        $members = Anggota::where('ukm_id', 516)->get();
        
        return view('pages/dasbor/dasbor', compact('members'));
    }

    public function getTotalAnggotaPerAngkatan()
        {
            $data = Anggota::select('angkatan', DB::raw('count(*) as total_anggota'))
                ->where('ukm_id', 516) // Menggunakan where() setelah from() atau select()
                ->groupBy('angkatan')
                ->get();

            // dd($data);
        
            return response()->json($data);
        }
}