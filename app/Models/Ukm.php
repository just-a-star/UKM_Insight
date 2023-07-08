<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    use HasFactory;

    protected $table = 'ukm';

    protected $fillable = ['nama', 'deskripsi'];

    public function anggota()
    {
        return $this->hasMany(Anggota::class, 'ukm_id');
    }
    public function asset()
    {
        return $this->hasMany(Asset::class, 'ukm_id');
    }    

    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class, 'ukm_id');
    }

    public function partisipanKegiatan()
    {
        return $this->hasMany(PartisipanKegiatan::class, 'ukm_id');
    }

    public function dana(){
        return $this->hasMany(Dana::class, 'dana_id');
    }

    public function getKetuaAttribute()
    {
        return $this->anggota()->where('posisi', 'Leader')->first();
    }

}