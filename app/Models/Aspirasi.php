<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;

    protected $table = 'aspirasi'; // karena nama tabel bukan jamak default
    protected $fillable = [
        'user_id',
        'kategori',
        'lokasi',
        'keterangan',
        'foto',
        'status',
        'feedback',
    ];

    // Relasi ke user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
