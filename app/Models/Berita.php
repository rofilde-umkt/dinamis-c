<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    public function jurnalis()
    {
        return $this->belongsTo(Jurnalis::class, "jurnalis_id");
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class, "berita_id");
    }
}
