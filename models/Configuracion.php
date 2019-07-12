<?php namespace LuisMayta\Web\Models;

use Model;

/**
 * Model
 */
class Configuracion extends Model
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
    public $table = 'luismayta_web_config';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
