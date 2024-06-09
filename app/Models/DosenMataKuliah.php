<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenMataKuliah extends Model
{

    protected $fillable = [
        'dosen_id',
        'mata_kuliah_id',
        'kode',
        'semester',
    ];

    public function mata_kuliah()
    {
        return $this->belongsTo(MataKuliah::class);
    }
    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }

    use HasFactory;
}
