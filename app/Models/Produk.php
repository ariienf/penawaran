<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['nama', 'harga', 'stok', 'kategori_id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
