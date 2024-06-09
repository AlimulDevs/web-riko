<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas'; // Nama tabel yang berkaitan

    protected $fillable = [
        'nim',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
