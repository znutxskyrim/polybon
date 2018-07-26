<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package App
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'person_id', 'territory_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role()
    {
        return $this->hasOne('App\UserRole', 'user_id', 'id');
    }

    public function territory()
    {
        return $this->belongsTo('App\Territory', 'territory_id', 'id');
    }

    public function isAdmin()
    {
        if ($this->role->role->role_name == 'Admin') {
            return true;
        }
        return false;
    }

    public function isSalesman()
    {
        if ($this->role->role->role_name == 'Salesman') {
            return true;
        }
        return false;
    }
}
