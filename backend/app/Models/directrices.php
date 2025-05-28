<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class directrices extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'photo_profil',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function demande_recrutement()
    {
        return $this->hasMany(demande_recrutements::class);
    }

    public function session_offre()
    {
        return $this->hasMany(session_offres::class);
    }
}
