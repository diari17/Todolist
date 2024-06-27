<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    protected $table = 'equipes';
    protected $primaryKey = 'IDEquipe';

    protected $fillable = [
        'NomEquipe', 'Description', 'IDCE',
    ];

    public function chefEquipe()
    {
        return $this->belongsTo(User::class, 'IDCE');
    }
}
