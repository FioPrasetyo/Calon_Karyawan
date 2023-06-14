<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat_pekerjaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'perushaaan',
        'posakhir',
        'gajiakhir',
        'tahun',
    ];
    protected $table = 'riwayat_pekerjaans';
    protected $foreignkey = 'id';
    public $timestamps = false;
}
