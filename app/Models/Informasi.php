<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;
     protected $fillable = ['nama_pengumuman', 'deskripsi','gambar'];
     public $timestamps=false;
     protected $primaryKey = 'id_pengumuman';
}
