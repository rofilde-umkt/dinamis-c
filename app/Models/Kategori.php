<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "kategori";

    public function berita()
    {
        return $this->belongsToMany(Berita::class, "kategori_berita", "kategori_id", "berita_id");
    }
}
