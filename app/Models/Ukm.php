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
        return $this->hasMany(Anggota::class);
    }
    public function asset()
    {
        return $this->hasMany(Asset::class);
    }    

    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class);
    }

    public function partisipanKegiatan()
    {
        return $this->hasMany(PartisipanKegiatan::class);
    }

    public function dana(){
        return $this->hasMany(Dana::class);
    }

    public function getKetuaAttribute()
    {
        return $this->anggota()->where('posisi', 'Leader')->first();
    }

}