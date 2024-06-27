<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    //use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'description',
    ];

    public function admins()
    {
        return $this->hasMany(Administrateur::class);
    }
}
