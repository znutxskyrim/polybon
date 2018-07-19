<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App
 */
class Product extends Model
{
    //
    /**
     * @var string
     */
    protected $primaryKey = 'product_id';
    public $incrementing = false;
    protected $table = "products";

    /**
     * @var array
     */
    protected $fillable = [
        'product_id', 'product_name' , 'description' , 'product_type_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type(){
        return $this->belongsTo('App\ProductType','product_type_id','product_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categories(){
        return $this->hasOne('App\Category','product_id','product_id');
    }
}
