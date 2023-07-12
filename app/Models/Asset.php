<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $table= 'aset';
    protected $fillable = ['ukm_id','nama', 'deskripsi', 'jumlah', 'tgl_pengadaan', ];
    public function ukm()
    {
        return $this->belongsTo(Ukm::class);
    }
    public function dana()
    {
        return $this->hasMany(Dana::class, 'aset_id');
    }
    

}