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

    public function company(){
        return $this->belongsTo('App\Company','company_id','id');
    }

    public function factory()
    {
        return $this->belongsTo('App\Factory','factory_id','id');
    }
}
