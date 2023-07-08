<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ukm;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';

    protected $fillable = ['ukm_id', 'nama', 'posisi', 'masa_jabatan', 'angkatan', 'no_telepon', 'email'];

    public function ukm()
    {
        return $this->belongsTo(Ukm::class);
    }
    public function partisipanKegiatan()
    {
        return $this->hasMany(PartisipanKegiatan::class, 'id_anggota');
    }

}