<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Wisata extends Model
{
    use HasFactory;
     protected $fillable = ['nama_wisata', 'alamat','deskripsi','gambar'];
     public $timestamps=false;
     protected $primaryKey = 'id_wisata';

     
}
