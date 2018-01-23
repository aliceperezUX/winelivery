<?php namespace Andresalice\Winelivery\Models;

use Model;

/**
 * Model
 */
class Cart extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'andresalice_winelivery_carts';

    public $belongsTo = [
        'product' => ['Andresalice\Winelivery\Models\Product'],
        'user' => ['RainLab\User\Models\User']
    ];
}