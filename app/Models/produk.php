<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class produk extends Model
{
    use HasFactory;
    protected $fillable = ['namaProduk', 'slug', 'hargaProduk', 'deskripsiProduk', 'namaGambar', 'category_id'];
    protected $with = ['category'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function gambar(): HasMany
    {
        return $this->hasMany(Gambar::class, 'idProduk');
    }
}
