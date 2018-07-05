<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    //
    protected $table = "userroles";

    protected $fillable = [
        'user_id', 'role_name'
    ];

    function role(){
        $role = Role::where("role_name","=",$this->role_name)->first();
        return $role;
    }
}
