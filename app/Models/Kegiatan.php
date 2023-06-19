<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatan';
    protected $fillable = ['nama', 'skala', 'keuangan', 'tgl_pelaksanaan'];
    public function ukm()
    {
        return $this->belongsTo(Ukm::class);
    }

    public function partisipan()
    {
        return $this->hasMany(Partisipan::class);
    }
}
