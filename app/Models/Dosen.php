<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosens'; // Nama tabel yang berkaitan

    protected $fillable = [
        'nidn',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
