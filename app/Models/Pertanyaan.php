<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaans'; // Nama tabel yang berkaitan
    protected $fillable = [
        'pertanyaan',
    ];
    use HasFactory;
}
