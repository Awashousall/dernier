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
        'cv_path',
        'statut',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
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

    // Ajoutez cette méthode dans votre modèle Etudiant
public function getBulletinsPathsAttribute($value)
{
    return json_decode($value, true); // Décodage du JSON en tableau associatif
}

}
