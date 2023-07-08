<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Dana extends Model
{
    use HasFactory;
    protected $table = 'dana';
    protected $fillable = ['nama', 'deskripsi', 'dana', 'waktu_transaksi', 'tipe_transaksi', 'keuangan_id'];

    public function asset()
    {
        return $this->belongsTo(Asset::class, 'aset_id');
    }
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id');
    }
}