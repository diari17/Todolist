<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte_rendu extends Model
{
    use HasFactory;
    protected $table = 'comptes_rendus';
    protected $primaryKey = 'IDCR';

    protected $fillable = [
        'IDCE', 'Contenu',
    ];

    public function chefEquipe()
    {
        return $this->belongsTo(User::class, 'IDCE');
    }
}
