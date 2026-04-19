<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryBook extends Model
{
    use HasFactory;

    protected $table = 'library_books';

    protected $fillable = [
        'isbn',
        'accession_number',
        'title',
        'author',
        'publisher',
        'publication_year',
        'edition',
        'category',
        'subject',
        'total_copies',
        'available_copies',
        'shelf_location',
        'description',
        'cover_image',
        'price',
        'status',
    ];

    protected $casts = [
        'publication_year' => 'integer',
        'total_copies' => 'integer',
        'available_copies' => 'integer',
        'price' => 'decimal:2',
    ];

    public function borrowings()
    {
        return $this->hasMany(LibraryBorrowing::class, 'book_id');
    }

    public function activeBorrowings()
    {
        return $this->borrowings()->whereIn('status', ['borrowed', 'overdue']);
    }

    public function getIsAvailableAttribute()
    {
        return $this->available_copies > 0;
    }

    public function scopeSearch($query, $search)
    {
        return $query->where(function ($q) use ($search) {
            $q->where('title', 'like', "%{$search}%")
              ->orWhere('author', 'like', "%{$search}%")
              ->orWhere('isbn', 'like', "%{$search}%")
              ->orWhere('accession_number', 'like', "%{$search}%");
        });
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}
