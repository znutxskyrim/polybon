<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Region
 * @package App
 */
class Region extends Model
{
    //
    /**
     * @var string
     */
    protected $table = "regions";

    /**
     * @var array
     */
    protected $fillable = ['description'];
}
