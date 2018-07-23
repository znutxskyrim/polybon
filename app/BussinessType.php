<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BussinessType
 * @package App
 */
class BussinessType extends Model
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
}
