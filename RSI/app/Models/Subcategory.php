<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_kategori', 'id'); // 'id_kategori' adalah foreign key di tabel products
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
