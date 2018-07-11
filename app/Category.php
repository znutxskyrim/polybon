<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App
 */
class Category extends Model
{
    //
    /**
     * @var string
     */
    protected $table = "categories";

    /**
     * @var array
     */
    protected $fillable = [
        'product_id', 'quantity', 'price'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(){
        return $this->belongsTo('App\Product','product_id','product_id');
    }

}
