<?php

    namespace App\Http\Controllers;

    use App\Models\Anggota;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;
    use App\Models\DataFeed;
    use Carbon\Carbon;

    class AnggotaController extends Controller
    {
        public function index()
        {
            $members = Anggota::where('ukm_id', 1)->get();
    
            return view('pages/anggota/anggota', compact('members'));
        }
    }
