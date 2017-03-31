<?php namespace Andresalice\Winelivery\Models;

use Model;

/**
 * Model
 */
class Order extends Model
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
    public $table = 'andresalice_winelivery_orders';

    public $belongsTo = [
        'user' => 'RainLab\User\Models\User',
        'address' => 'Andresalice\Winelivery\Models\Address'
    ];

    public $hasMany = [
        'porder' => 'Andresalice\Winelivery\Models\Porder'
    ];

    // public function getSymbolsAttribute()
    // {
    //     if(!empty($this["attributes"]["symbol"]))
    //     {
    //        $symbol = Symbols::find($this["attributes"]["symbol"]);
    //        return $symbol->symbols->getThumb(50, 50, 'crop');
    //     }
    // }
}