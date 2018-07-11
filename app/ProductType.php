<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductType
 * @package App
 */
class ProductType extends Model
{
    //
    /**
     * @var string
     */
    protected $table = "producttypes";

    /**
     * @var array
     */
    protected $fillable = [
        'product_type_id', 'description'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product(){
        return $this->hasMany('App\Product','product_type_id','product_type_id');
    }

}
