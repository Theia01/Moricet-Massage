<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    use Notifiable;

    const PSEUDO = 'name';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';
    const PASSWORD = 'password';
    const EMAIL = 'email';
    const AVATAR = 'avatar';
    const ACTIVE = 'active';
    const ROLE = 'role';

    protected $fillable = [
        'name', 'email', 'password', 'created_at', 'updated_at', 'deleted_at', 'active', 'role', 'avatar',
    ];
}
