<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Administrateur extends Model
{
    // use HasFactory;
    protected $primaryKey = 'IDAdmin';

    protected $fillable = [
        'IDUser', 'Role',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'IDUser', 'IDUser');
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
