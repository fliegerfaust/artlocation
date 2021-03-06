<?php namespace Artlocation\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArtlocationProjectsJobs2 extends Migration
{
    public function up()
    {
        Schema::create('artlocation_projects_jobs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('artlocation_projects_jobs');
    }
}
