<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnalis extends Model
{
    use HasFactory;

    protected $table = "jurnalis";

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function berita()
    {
        return $this->hasMany(Berita::class, "jurnalis_id");
    }
}
