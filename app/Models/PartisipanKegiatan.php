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
        return $this->belongsTo(Kegiatan::class, 'id_kegiatan');
    }

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }
    
}