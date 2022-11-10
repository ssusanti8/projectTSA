<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal', 'waktu', 'orang', 'spesial', 'total', 'bukti', 'meja', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
