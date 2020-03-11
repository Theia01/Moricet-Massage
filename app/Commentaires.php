<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Commentaires extends Model
{
    use Notifiable;

    const ID = 'id';
    const USER = 'user';
    const CORPS = 'corps';
    const ARTICLE = 'article';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'nom', 'image', 'corps', 'user', 'updated_at', 'created_at',
    ];
}
