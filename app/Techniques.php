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

    protected $fillable = [
        'id', 'nom', 'description', 'image', 'icon', 'tarif', 'duree', 'created_at', 'updated_at',
    ];

    public function massages()
    {
        return $this->hasMany(Massages::class, 'id_technique');
    }
}
