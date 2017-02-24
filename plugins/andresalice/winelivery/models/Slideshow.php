<?php namespace Andresalice\Winelivery\Models;

use Model;

/**
 * Model
 */
class Slideshow extends Model
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
    public $table = 'andresalice_winelivery_slideshows';

    public $attachOne = ['images' => ['System\Models\File']];
}