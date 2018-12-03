<?php namespace Artlocation\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArtlocationProjectsJobs extends Migration
{
    public function up()
    {
        Schema::table('artlocation_projects_jobs', function($table)
        {
            $table->integer('sort_order')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('artlocation_projects_jobs', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
