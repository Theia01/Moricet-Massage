<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Articles extends Model
{
    use Notifiable;

    const ID = 'id';
    const NOM = 'nom';
    const IMAGE = 'image';
    const CORPS = 'corps';
    const USER = 'user';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id','nom', 'image', 'corps', 'user', 'updated_at', 'created_at',
    ];

    public function comments()
    {
        return $this->hasMany(Commentaires::class, 'article');
    }
}
