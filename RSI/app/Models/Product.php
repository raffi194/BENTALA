<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
{
    return $this->belongsTo(Category::class, 'id_kategori'); // Ganti 'category_id' sesuai kolom database Anda
}

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'id_subkategori'); // 'id_kategori' adalah foreign key di tabel products
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
