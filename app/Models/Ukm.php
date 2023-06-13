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
}