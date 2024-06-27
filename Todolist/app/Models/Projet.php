<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $table = 'projets';
    protected $primaryKey = 'IDProjet';

    protected $fillable = [
        'NomProjet', 'Description', 'IDCP',
    ];

    public function chefDeProjet()
    {
        return $this->belongsTo(User::class, 'IDCP');
    }

    public function taches()
    {
        return $this->hasMany(Tache::class, 'IDProjet');
    }
}
