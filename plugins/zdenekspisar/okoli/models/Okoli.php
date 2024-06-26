<?php namespace ZdenekSpisar\Okoli\Models;

use Model;

/**
 * Model
 */
class Okoli extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'zdenekspisar_okoli_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];



/* Relations */

public $attachOne = [
    'poster' => 'System\Models\File'
];

}