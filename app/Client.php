<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * @package App
 */
class Client extends Model
{
    //
    /**
     * @var string
     */
    protected $table = "clients";

    /**
     * @var array
     */
    protected $fillable = ['person_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function person(){
        return $this->belongsTo('App\Person','person_id','id');
    }
}
