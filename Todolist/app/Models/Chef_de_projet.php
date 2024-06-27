<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef_de_projet extends Model
{
    use HasFactory;
    protected $table = 'chef_de_projets';
    protected $primaryKey = 'IDCP';

    protected $fillable = [
        'IDUser', 'Role',
    ];

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'IDUser');
    }

    public function projets()
    {
        return $this->hasMany(Projet::class, 'IDCP');
    }
}
