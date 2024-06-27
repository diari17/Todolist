<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;
    protected $table = 'taches';
    protected $primaryKey = 'IDTache';

    protected $fillable = [
        'Titre', 'Description', 'Due_date', 'Status', 'IDProjet',
    ];

    public function projet()
    {
        return $this->belongsTo(Projet::class, 'IDProjet');
    }
}
