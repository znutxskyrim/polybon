<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CompanyFactory
 * @package App
 */
class CompanyFactory extends Model
{
    //
    /**
     * @var string
     */
    protected $table = 'companyfactories';

    /**
     * @var array
     */
    protected $fillable = ['company_id','factory_id'];
}
