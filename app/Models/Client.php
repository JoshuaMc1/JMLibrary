<?php

namespace App\Models;

use App\Enum\ClientType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'type',
    ];

    protected function casts(): array
    {
        return [
            'type' => ClientType::class,
        ];
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}
