<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "acara";
    protected $fillable = ['judul','gambar','tanggal'];

}