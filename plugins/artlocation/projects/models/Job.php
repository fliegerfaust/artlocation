<?php namespace Artlocation\Projects\Models;

use Model;

/**
 * Model
 */
class Job extends Model
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
    public $table = 'artlocation_projects_jobs';

    /**
     * [setTitleAttribute mutator before save to DB]
     * @param [array] $value [array with keys]
     */
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = mb_strtolower($value,'UTF-8');
    }

    /* Relations */

    public $belongsToMany = [
        'projects' => [
            'Artlocation\Projects\Models\Project',
            'table' => 'artlocation_projects_projects_jobs',
            'key' => 'job_id',
            'otherKey' => 'project_id',
            // 'order' => 'title'
        ]
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
