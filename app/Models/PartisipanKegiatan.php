<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartisipanKegiatan extends Model
{
    protected $table = 'partisipan_kegiatan';

    protected $fillable = [
        'role',
    ];

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'anggota_id');
    }

    public function partisipanKegiatan()
{
    return $this->hasMany(PartisipanKegiatan::class)->where('role', 'penanggung_jawab');
}


    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'anggota_id');
    }
    
}