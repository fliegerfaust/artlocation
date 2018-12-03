<?php namespace Artlocation\Projects\Models;

use Model;

/**
 * Model
 */
class Project extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'artlocation_projects_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /* Relations */

    public $belongsToMany = [
        'jobs' => [
            'Artlocation\Projects\Models\Job',
            'table' => 'artlocation_projects_projects_jobs',
            'key' => 'project_id',
            'otherKey' => 'job_id',
            'order' => 'title'
        ]
    ];

    public $belongsTo = [
        'filter' => [
            'Artlocation\Projects\Models\Filter',
            'table' => 'artlocation_projects_filters'
        ]
    ];

    public $attachOne = [
        'preview_img' => 'System\Models\File',
        'project_img' => 'System\Models\File'
    ];

}
