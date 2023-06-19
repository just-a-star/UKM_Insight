<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partisipan extends Model
{
    use HasFactory;
    protected $table= 'partisipan_kegiatan';
    protected $fillable = ['anggota_id','kegiatan_id','role'];
    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }
    public function kegiatan()
    {
        return $this->belongsTo(kegiatan::class);
    }
}
