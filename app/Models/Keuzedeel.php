<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuzedeel extends Model
{
    use HasFactory;

    // Vul de kolommen in die je mass assignable wilt maken
    protected $fillable = ['naam', 'opleiding'];

    // Vertel Laravel dat de tabel 'keuzedelen' heet
    protected $table = 'keuzedelen';

    // Relatie: een keuzedeel kan meerdere studenten hebben
    public function studenten()
    {
        return $this->hasMany(Student::class, 'keuzedeel_id');
    }
}
