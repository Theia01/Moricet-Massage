<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    const ID = 'id';
    const USER = 'user';
    const ARTICLE = 'article';
    const VALUE = 'value';

    public $timestamps = false;

    protected $fillable = [
        'id', 'user', 'article', 'value'
    ];

}
