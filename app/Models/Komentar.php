<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $table="komentar";

    public function berita()
    {
        return $this->belongsTo(Berita::class, "berita_id");
    }

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
