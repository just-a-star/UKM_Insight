<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;
    protected $table = 'keuangan_ukm';
    protected $fillable = ['ukm_id', 'aset_id', 'dana_id', 'nama','deskripsi'];
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }
    public function dana()
    {
        return $this->hasMany(Dana::class);
    }

}