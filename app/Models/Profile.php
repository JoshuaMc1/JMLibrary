<?php

namespace App\Models;

use App\Enum\Gender;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'dni',
        'user_id',
        'names',
        'last_names',
        'address',
        'phone_number',
        'email',
        'avatar',
        'gender',
        'birthdate',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function client()
    {
        return $this->hasOne(Client::class);
    }

    protected function casts(): array
    {
        return [
            'gender' => Gender::class,
            'birthdate' => 'date',
        ];
    }
}
