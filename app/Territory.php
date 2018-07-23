<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Territory
 * @package App
 */
class Territory extends Model
{
    //
    /**
     * @var string
     */
    protected $table = 'territories';

    /**
     * @var array
     */
    protected $fillable = ['description','region_id'];

    public function region(){
        return $this->belongsTo('App\Region','region_id','id');
    }

    public function users(){
        return $this->hasMany('App\User','territory_id','id');
    }
}
