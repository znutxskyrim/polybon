<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * @package App
 */
class Role extends Model
{
    //
    /**
     * @var string
     */
    protected $table = 'roles';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    function UserRoles(){
        return $this->hasMany('App\UserRole','role_name','role_names');
    }
}
