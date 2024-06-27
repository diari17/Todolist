<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinateur extends Model
{
    use HasFactory;
    protected $table = 'coordinateurs';
    protected $primaryKey = 'IDCo';

    protected $fillable = [
        'IDUser', 'Role',
    ];

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'IDUser');
    }
}
