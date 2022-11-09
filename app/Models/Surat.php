<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $table = 'surat';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nomor_surat',
        'kategori_surat',
        'judul_surat',
        'file_surat',
    ];
}
