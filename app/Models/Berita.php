<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = "berita";

    public function jurnalis()
    {
        return $this->belongsTo(Jurnalis::class, "jurnalis_id");
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class, "berita_id");
    }

    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, "kategori_berita", "berita_id", "kategori_id");
    }
}
