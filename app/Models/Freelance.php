<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelance extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom','prenom','daten', 'tel', 'email', 'ville', 'metier', 'competence', 'cv','description', 'tarif',
        ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
