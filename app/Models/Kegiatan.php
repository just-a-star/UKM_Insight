<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatan';
    protected $fillable = ['nama', 'skala', 'dana', 'tgl_pelaksanaan', 'kategori', 'ukm_id'];
    public function ukm()
    {
        return $this->belongsTo(Ukm::class);
    }

    public function partisipanKegiatan()
    {
        return $this->hasMany(PartisipanKegiatan::class);
    }

    public function dana(){
        return $this->hasMany(Dana::class);
    }
}