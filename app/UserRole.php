<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserRole
 * @package App
 */
class UserRole extends Model
{
    //
    /**
     * @var string
     */
    protected $table = "userroles";

    /**
     * @var array
     */
    protected $fillable = [
        'user_id', 'role_name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function role(){
        return $this->belongsTo('App\Role','role_name','role_name');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function user(){
        return $this->belongsTo('App\User','user_id','id');
    }


}
