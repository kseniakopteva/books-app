<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $with = ['genres', 'authors'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query->where(fn ($query) =>
            $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%'));
        });

        $query->when($filters['genre'] ?? false, function ($query, $genre) {
            $query->whereHas('genres', fn ($query) => $query->where('slug', $genre));
        });

        $query->when($filters['author'] ?? false, function ($query, $author) {
            $query->whereHas('authors', fn ($query) => $query->where('slug', $author));
        });
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
}
