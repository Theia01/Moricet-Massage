<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Techniques extends Model
{
    use Notifiable;

    const ID = 'id';
    const NOM = 'nom';
    const DESCRIPTION = 'description';
    const IMAGE = 'image';
    const ICON = 'icon';
    const TARIF = 'tarif';
    const DUREE = 'duree';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const ID_MASSAGE = 'massages_id';

    protected $fillable = [
        'id', 'nom', 'description', 'image', 'icon', 'tarif', 'duree', 'created_at', 'updated_at','massages_id'
    ];
    
}
