<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $table= 'aset';
    protected $fillable = ['1d','ukm_id','nama', 'deskripsi'];
    public function ukm()
    {
        return $this->belongsTo(Ukm::class);
    }
}
