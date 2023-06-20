<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dana extends Model
{
    use HasFactory;
    protected $table = 'dana_tetap';
    protected $fillable = ['ukm_id','nama', 'deskripsi', 'dana', 'tgl_penerimaan'];
    public function ukm()
    {
        return $this->belongsTo(Ukm::class);
    }
    public function keuangan()
    {
        return $this->belongsTo(Keuangan::class);
    }
}
