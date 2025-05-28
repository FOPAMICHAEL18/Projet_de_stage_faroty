<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class chef_departements extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'name_department',
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

}
