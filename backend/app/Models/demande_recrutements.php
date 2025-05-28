<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class demande_recrutements extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'chef_departement_id',
        'directrice_id',
        'content',
        'actif',
    ];

    public function chef_departement()
    {
        return $this->belongsTo(chef_departements::class);
    }

    public function directrice()
    {
        return $this->belongsTo(directrices::class);
    }
}
