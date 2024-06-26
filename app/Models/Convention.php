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

    public function rules()
    {
        return [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'adresse_email' => 'required|email|max:255',
            'ecole' => 'required|string|max:255',
            'duree' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'domaine' => 'required|string|max:255',
            'signature_cabinet' => 'required|string|max:255',
        ];
    }
}
