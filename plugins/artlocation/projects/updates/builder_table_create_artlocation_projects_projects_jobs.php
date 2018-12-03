<?php namespace Artlocation\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArtlocationProjectsProjectsJobs extends Migration
{
    public function up()
    {
        Schema::create('artlocation_projects_projects_jobs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('project_id');
            $table->integer('job_id');
            $table->primary(['project_id','job_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('artlocation_projects_projects_jobs');
    }
}
