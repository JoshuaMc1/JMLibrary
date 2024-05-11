<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'isbn',
        'title',
        'author',
        'year',
        'genre',
        'copies_available',
        'shelf_id',
        'cubicle_id',
    ];

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function shelf()
    {
        return $this->belongsTo(Shelf::class);
    }

    public function cubicle()
    {
        return $this->belongsTo(Cubicle::class);
    }
}
