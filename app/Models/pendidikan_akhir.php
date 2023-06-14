<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendidikan_akhir extends Model
{
    use HasFactory;
    protected $fillable = [
        'penakhir',
        'institusi',
        'jurusan',
        'tahlulus',
        'ipk',
    ];
    protected $table = 'pendidikan_akhirs';
    protected $foreignkey = 'id';
    public $timestamps = false;
}
