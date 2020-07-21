<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "produk";
    protected $fillable = ['judul','gambar','harga','linkline'];

}