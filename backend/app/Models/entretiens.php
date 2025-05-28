<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class entretiens extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'date_entretien',
        'debut_entretien',
        'fin_entretien',
        'actif',
    ];
    public function demande_candidature()
    {
        return $this->hasMany(demande_candidatures::class);
    }
}
