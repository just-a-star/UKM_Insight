<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataFeed;
use Carbon\Carbon;
class AssetsController extends Controller
{
    /**
     * Displays the dashboard screen
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $dataFeed = new DataFeed();

        return view('pages/assets/asset', compact('dataFeed'));
    }
}