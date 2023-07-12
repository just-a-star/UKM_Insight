<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PartisipanKegiatan;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatan';
    protected $fillable = ['nama', 'skala', 'dana', 'tgl_pelaksanaan', 'kategori', 'ukm_id', 'deskripsi'];

    public function ukm()
    {
        return $this->belongsTo(Ukm::class);
    }

    public function partisipanKegiatan()
    {
        return $this->hasMany(PartisipanKegiatan::class, 'kegiatan_id');
    }

    public function penanggungJawab()
    {
        return $this->partisipanKegiatan()
            ->where('role', 'penanggung_jawab')
            ->with('anggota');
    }

    public function dana()
    {
        return $this->hasMany(Dana::class, 'kegiatan_id');
    }

    public function feedbackKegiatan()
    {
        return $this->hasMany(FeedbackKegiatan::class, 'kegiatan_id');
    }
}