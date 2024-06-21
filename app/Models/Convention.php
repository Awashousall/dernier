<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convention extends Model
{
    use HasFactory;

    protected $fillable = [
        'etudiant_id',
        'nom',
        'prenom',
        'adresse',
        'adresse_email',
        'ecole',
        'duree',
        'signature_cabinet',
        'status',
        'domaine',
        'fichier'
    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
}
