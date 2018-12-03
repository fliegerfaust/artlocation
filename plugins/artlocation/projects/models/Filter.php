<?php namespace Artlocation\Projects\Models;

use Model;

/**
 * Model
 */
class Filter extends Model
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
    public $table = 'artlocation_projects_filters';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /* Relations */

    public $hasMany = [
        'projects' => [
            'Artlocation\Projects\Models\Project',
            'table' => 'artlocation_projects_',
            'key' => 'filter_id',
        ]
    ];
}
