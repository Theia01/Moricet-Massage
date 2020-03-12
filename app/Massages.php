<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Massages extends Model
{
    use Notifiable;

    const ID = 'id';
    const NOM = 'nom';
    const PRIX = 'prix';
    const RESUME = 'resume';
    const DESCRIPTION = 'description';
    const IMAGE = 'image';
    const PRODUITS = 'produits';
    const BIENFAITS = 'bienfaits';
    const ALLERGIES = 'allergies';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id', 'nom', 'prix', 'resume', 'description', 'image', 'produits', 'bienfaits', 'allergies', 'created_at', 'updated_at',
    ];
}
