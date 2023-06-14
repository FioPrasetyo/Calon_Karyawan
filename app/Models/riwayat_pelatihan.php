<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat_pelatihan extends Model
{
    use HasFactory;
    protected $fillable = [
        'kursus',
        'sertifikat',
        'tahun',
    ];
    protected $table = 'riwayat_pelatihans';
    protected $foreignkey = 'id';
    public $timestamps = false;
}
