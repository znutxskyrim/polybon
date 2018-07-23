<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BusinessType
 * @package App
 */
class BusinessType extends Model
{
    //
    /**
     * @var string
     */
    protected $table = 'businesstypes';
    /**
     * @var array
     */
    protected $fillable = ['business_name'];

    public function companies()
    {
        return $this->hasMany('App\Company','business_id','id');
    }
}
