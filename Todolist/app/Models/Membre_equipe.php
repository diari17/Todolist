<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre_equipe extends Model
{
    use HasFactory;
    protected $table = 'membre_equipes';
    protected $primaryKey = 'IDMembre';

    protected $fillable = [
        'IDUser', 'Role',
    ];

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'IDUser');
    }
}
