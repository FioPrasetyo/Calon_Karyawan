<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','posisi','nama','noktp','ttl',
        'jk','agama','goldar','status','alamat1',
        'alamat2','email','notlp','orgdekat','skill',
        'bersedia','gaji'
    ];
    protected $table = 'biodata';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
}
