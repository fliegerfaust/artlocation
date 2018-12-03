<?php namespace Artlocation\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteArtlocationProjectsJobs extends Migration
{
    public function up()
    {
        Schema::dropIfExists('artlocation_projects_jobs');
    }
    
    public function down()
    {
        Schema::create('artlocation_projects_jobs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 191);
        });
    }
}
