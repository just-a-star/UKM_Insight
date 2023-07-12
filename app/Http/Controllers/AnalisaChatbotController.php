<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Anggota;
use App\Models\Ukm;
use App\Models\Asset;
use App\Models\Dana;
use App\Models\FeedbackKegiatan;
use App\Models\PartisipanKegiatan;
use App\Models\Kegiatan;

class AnalisaChatbotController extends Controller
{
    public function index()
    {
        return view('pages/chatbot/analisa-chatbot');
    }
    public function chat(Request $request)
{
    $databaseData = $this->getDatabaseData();
    
    $payload = [
        'model' => 'text-davinci-003',
        'prompt' => $databaseData . "Berdasarkan data ini, jawablah pertanyaan yang diajukan. Jika anda ingin mengarahkan pada kegiatan tertentu maka anda bisa menambahkan link page dengan format <a href='http://127.0.0.1:8000/kegiatan/detail/{Kegiatan ID}'>{nama kegiatan}</a>. Atau jika anda ingin mengarahkan pada ukm tertentu juga bisa menambahkan page dengan format <a href='http://127.0.0.1:8000/ukm-dasbor/{UKM ID}'>{nama kegiatan}</a> Pertanyaannya adalah ini : " . $request->chatInput . '.',
        'temperature' => 0.5,
        'max_tokens' => 300,
        'top_p' => 1,
        'frequency_penalty' => 0,
        'presence_penalty' => 0,
    ];

    $response = Http::withHeaders([
        'Authorization' => 'Bearer'.' '.env('OPENAI_API_KEY'),
        'Content-Type' => 'application/json',
    ])->post('https://api.openai.com/v1/completions', $payload);

    return $response;
}

public function getDatabaseData()
{
    // Define the headers
    $ukmHeader = 'Ukm ID, Ukm Nama, Ukm Deskripsi';
    $anggotaHeader = 'Anggota ID, Anggota Nama, Posisi, Masa Jabatan, Angkatan, No Telepon, Email';
    $asetHeader = 'Aset ID, Aset Nama, Aset Deskripsi, Jumlah, Tanggal Pengadaan';
    $kegiatanHeader = 'Kegiatan ID, Kegiatan Nama, Skala, Kategori, Tanggal Pelaksanaan, Proposal';
    $danaHeader = 'Dana ID, Ukm ID, Dana Nama, Dana Deskripsi, Dana, Waktu Transaksi, Tipe Transaksi, Laporan Keuangan, Kegiatan ID, Aset ID';
    $feedbackKegiatanHeader = 'Feedback Kegiatan ID, Kegiatan ID, Rating, Komentar';
    $partisipanKegiatanHeader = 'Partisipan Kegiatan ID, Kegiatan ID, Anggota ID';

    // Retrieve the data
    $ukmData = Ukm::select('id', 'nama', 'deskripsi')->get();
    $anggotaData = Anggota::select('id', 'nama', 'posisi', 'masa_jabatan', 'angkatan', 'no_telepon', 'email')->get();
    $asetData = Asset::select('id', 'nama', 'deskripsi', 'jumlah', 'tgl_pengadaan')->get();
    $kegiatanData = Kegiatan::select('id', 'nama', 'skala', 'kategori', 'tgl_pelaksanaan', 'proposal')->get();
    $danaData = Dana::select('id', 'ukm_id', 'nama', 'deskripsi', 'dana', 'waktu_transaksi', 'tipe_transaksi', 'laporan_keuangan', 'kegiatan_id', 'aset_id')->get();
    $feedbackKegiatanData = FeedbackKegiatan::select('id', 'kegiatan_id', 'rating', 'komentar')->get();
    $partisipanKegiatanData = PartisipanKegiatan::select('id', 'kegiatan_id', 'anggota_id')->get();

    // Create the rows for each table
    $ukmRows = $ukmData->map(function ($ukm) {
        return implode(',', [
            $ukm->id,
            $ukm->nama,
            $ukm->deskripsi,
        ]);
    })->join("\n");

    $anggotaRows = $anggotaData->map(function ($anggota) {
        return implode(',', [
            $anggota->id,
            $anggota->nama,
            $anggota->posisi,
            $anggota->masa_jabatan,
            $anggota->angkatan,
            $anggota->no_telepon,
            $anggota->email,
        ]);
    })->join("\n");

    $asetRows = $asetData->map(function ($aset) {
        return implode(',', [
            $aset->id,
            $aset->nama,
            $aset->deskripsi,
            $aset->jumlah,
            $aset->tgl_pengadaan,
        ]);
    })->join("\n");

    $kegiatanRows = $kegiatanData->map(function ($kegiatan) {
        return implode(',', [
            $kegiatan->id,
            $kegiatan->nama,
            $kegiatan->skala,
            $kegiatan->kategori,
            $kegiatan->tgl_pelaksanaan,
            $kegiatan->proposal,
        ]);
    })->join("\n");

    $danaRows = $danaData->map(function ($dana) {
        return implode(',', [
            $dana->id,
            $dana->ukm_id,
            $dana->nama,
            $dana->deskripsi,
            $dana->dana,
            $dana->waktu_transaksi,
            $dana->tipe_transaksi,
            $dana->laporan_keuangan,
            $dana->kegiatan_id,
            $dana->aset_id,
        ]);
    })->join("\n");

    $feedbackKegiatanRows = $feedbackKegiatanData->map(function ($feedback) {
        return implode(',', [
            $feedback->id,
            $feedback->kegiatan_id,
            $feedback->rating,
            $feedback->komentar,
        ]);
    })->join("\n");

    $partisipanKegiatanRows = $partisipanKegiatanData->map(function ($partisipan) {
        return implode(',', [
            $partisipan->id,
            $partisipan->kegiatan_id,
            $partisipan->anggota_id,
        ]);
    })->join("\n");

    // Combine the headers and rows for each table
    $output = $ukmHeader . "\n" . $ukmRows . "\n\n";
    $output .= $anggotaHeader . "\n" . $anggotaRows . "\n\n";
    $output .= $asetHeader . "\n" . $asetRows . "\n\n";
    $output .= $kegiatanHeader . "\n" . $kegiatanRows . "\n\n";
    $output .= $danaHeader . "\n" . $danaRows . "\n\n";
    $output .= $feedbackKegiatanHeader . "\n" . $feedbackKegiatanRows . "\n\n";
    $output .= $partisipanKegiatanHeader . "\n" . $partisipanKegiatanRows . "\n\n";

    return $output;
}




}