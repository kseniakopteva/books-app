<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // protected $primaryKey = 'genre_id';
    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
