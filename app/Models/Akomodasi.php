<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akomodasi extends Model
{
    use HasFactory;
    protected $fillable = ['nama_akomodasi', 'alamat','fasilitas','deskripsi','gambar'];
    public $timestamps=false;
    protected $primaryKey = 'id_akomodasi';
}
