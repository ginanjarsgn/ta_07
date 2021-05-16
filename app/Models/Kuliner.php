<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
    use HasFactory;
	protected $fillable = ['nama_kuliner', 'alamat','jenis_makanan','deskripsi','gambar'];
    public $timestamps=false;
    protected $primaryKey = 'id_kuliner';
}
