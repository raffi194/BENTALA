<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function member()
    {
        return $this->belongsTo(Member::class, 'id_member', 'id'); // 'id_member' adalah foreign key di tabel products
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_barang', 'id'); // 'id_produk' adalah foreign key di tabel products
    }
}
