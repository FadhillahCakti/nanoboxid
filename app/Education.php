<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = "edukasi";
    protected $fillable = ['judul','gambar','paragraf1','paragraf2','paragraf3','paragraf4'];
}