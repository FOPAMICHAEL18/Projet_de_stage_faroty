<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class session_offres extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'directrice_id',
        'name',
        'name_offre',
        'create_offre',
        'delete_offre',
        'metier',
        'contrat',
        'duree_contrat',
        'niveau_etude',
        'niveau_experience',
        'localisation',
        'description',
        'profil',
    ];

    public function directrice()
    {
        return $this->belongsTo(directrices::class);
    }
    public function demande_candidature()
    {
        return $this->hasMany(demande_candidatures::class);
    }

}
