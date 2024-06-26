<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cubicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
