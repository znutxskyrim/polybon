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
     * @var string
     */
    protected $primaryKey = 'product_type_id';
    /**
     * @var bool
     * Set When Find ID  ( Int to  String )
     */
    public $incrementing = false;
    /**
     * @var array
     */
    protected $fillable = [
        'product_type_id', 'description'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products(){
        return $this->hasMany('App\Product','product_type_id','product_type_id');
    }

}
