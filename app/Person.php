<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Person
 * @package App
 */
class Person extends Model
{
    //
    /**
     * @var string
     */
    protected $table = "persons";

    /**
     * @var array
     */
    protected $fillable = [
        'firstname'
        ,'lastname'
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
}
