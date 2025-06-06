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
        'user_id',
        'title',
        'content',
        'actif',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
