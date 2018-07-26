<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 * @package App
 */
class Company extends Model
{
    //
    /**
     * @var string
     */
    protected $table = 'companies';
    /**
     * @var array
     */
    protected $fillable = ['company_name'
        , 'employee_id'
        , 'business_type'
    ];

    public function BusinessType(){
        return $this->belongsTo('App\BusinessType','business_id','id');
    }
}
