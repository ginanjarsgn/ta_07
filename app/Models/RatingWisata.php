<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingWisata extends Model
{
    use HasFactory;
    protected $fillable = ['id_wisataa', 'rating'];
    public $timestamps=false;
    protected $primaryKey = 'id_rating_wisata';
}
