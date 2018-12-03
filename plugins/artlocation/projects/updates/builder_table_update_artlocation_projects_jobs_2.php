<?php namespace Artlocation\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArtlocationProjectsJobs2 extends Migration
{
    public function up()
    {
        Schema::table('artlocation_projects_jobs', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('artlocation_projects_jobs', function($table)
        {
            $table->integer('sort_order')->nullable()->unsigned();
        });
    }
}
