<?php namespace Brenda\Carros\Models;

use Model;

/**
 * Model
 */
class Carro extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'brenda_carros_';
}