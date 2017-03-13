<?php namespace Andresalice\Winelivery\Models;

use Model;

/**
 * Model
 */
class Product extends Model
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
    public $table = 'andresalice_winelivery_products';

    public $attachOne = ['featured_image' => ['System\Models\File'], 'featured_image_big' => ['System\Models\File']];

    // public $belongsTo = [
    //     'uva' => 'Andresalice\Winelivery\Models\Uva',
    //     'country' => 'Andresalice\Winelivery\Models\Country',
    //     'region' => 'Andresalice\Winelivery\Models\Region',
    //     'category' => 'Andresalice\Winelivery\Models\Category'
    // ];
    public $belongsTo = [
        'uva' => 'Andresalice\Winelivery\Models\Uva',
        'region' => 'Andresalice\Winelivery\Models\Region',
        'category' => 'Andresalice\Winelivery\Models\Category'
    ];

    public $belongsToMany = [
        'uvas' => ['Andresalice\Winelivery\Models\Uva']
    ];

    public $hasMany = ['stars' => ['Andresalice\Winelivery\Models\Rating'], 'comments' => ['Andresalice\Winelivery\Models\Comment']];


}