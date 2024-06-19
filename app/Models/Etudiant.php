<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'adresse',
        'universite',
        'domaine',
        'niveau',
        'diplome_baccalaureat_path',
        'carte_identite_path',
        'bulletins_paths',
        'autre_diplome_path',
        'statut',
    ];

    protected $casts = [
        'bulletins_paths' => 'array',
    ];

    public function getStatutAttribute()
    {
        // Vérifie si l'étudiant a une convention
        return $this->convention ? 'traité' : 'non traité';
    }

    public function convention()
    {
        return $this->hasOne(Convention::class);
    }
}