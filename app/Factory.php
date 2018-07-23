<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Factory
 * @package App
 */
class Factory extends Model
{
    //
    /**
     * @var string
     */
    protected $table = 'factories';

    /**
     * @var array
     */
    protected $fillable = ['name'
        ,'address'
        ,'villagenumber'
        ,'alley'
        ,'road'
        ,'subdistrict'
        ,'district'
        ,'province'
        ,'postcode'
        ,'phonenumber'
        ,'phonenumber_con'
        ,'fax'
        ,'email'
    ];

    public function companyfactories(){
        return $this->hasMany('App\CompanyFactory','factory_id','id');
    }
}
