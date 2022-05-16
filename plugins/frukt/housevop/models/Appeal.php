<?php namespace Frukt\Housevop\Models;

use Model;

/**
 * Model
 */
class Appeal extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'frukt_housevop_appeals';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
