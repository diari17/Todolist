<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef_equipe extends Model
{
    use HasFactory;
    protected $table = 'chef_equipes';
    protected $primaryKey = 'IDCE';

    protected $fillable = [
        'IDUser', 'Role',
    ];

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'IDUser');
    }

    public function equipes()
    {
        return $this->hasMany(Equipe::class, 'IDCE');
    }

    public function comptesRendus()
    {
        return $this->hasMany(Compte_rendu::class, 'IDCE');
    }
}
