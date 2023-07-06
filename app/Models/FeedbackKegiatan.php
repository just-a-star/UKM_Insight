<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackKegiatan extends Model
{
    use HasFactory;
    protected $table = 'feedback_kegiatan';
    protected $fillable = ['kegiatan_id', 'partisipan_kegiatan_id', 'rating', 'komentar'];
   
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }
    public function partisipan_kegiatan()
    {
        return $this->belongsTo(PartisipanKegiatan::class);
    }
}