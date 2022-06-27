<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    // protected $primaryKey = 'genre_id';
    public function books()
    {
        return $this->belongsToMany(Book::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_genre');
    }
}
