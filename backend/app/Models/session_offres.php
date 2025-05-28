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
        'user_id',
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

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function demande_candidature()
    {
        return $this->hasMany(demande_candidatures::class);
    }

}
