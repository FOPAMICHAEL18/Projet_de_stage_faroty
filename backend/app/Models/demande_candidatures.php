<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class demande_candidatures extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'session_offre_id',
        'user_id',
        'name',
        'email',
        'adresse',
        'phone',
        'cv',
        'lettre_motivation',
        'lettre_recommandation',
        'niveau_experience',
        'niveau_etude',
        'langue',
        'photo_cni',
        'status',
    ];

    public function session_offre()
    {
        return $this->belongsTo(session_offres::class);
    }
    public function entretien()
    {
        return $this->belongsTo(entretiens::class);
    }
}
