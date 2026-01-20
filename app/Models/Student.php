<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password', 'studentnummer', 'keuzedeel_id'];

    protected $hidden = ['password', 'remember_token'];

    // RELATIE MET KEUZEDEEL
    public function keuzedeel()
    {
        return $this->belongsTo(Keuzedeel::class, 'keuzedeel_id');
    }
}

