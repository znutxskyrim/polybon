<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeTerritory
 * @package App
 */
class EmployeeTerritory extends Model
{
    //
    /**
     * @var string
     */
    protected $table = 'employeeterritories';
    /**
     * @var array
     */
    protected $fillable = ['employee_id','territory_id'];
}
