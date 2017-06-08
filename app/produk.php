<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    //
    protected $table ='produkk';
    protected $filliable =['nama_produk','harga','diskon'];
    protected $visible =['nama_produk','harga','diskon'];
    public $timestamps =true;
}
