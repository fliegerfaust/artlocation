<?php namespace Artlocation\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArtlocationProjectsFilters2 extends Migration
{
    public function up()
    {
        Schema::table('artlocation_projects_filters', function($table)
        {
            $table->integer('project_id');
        });
    }
    
    public function down()
    {
        Schema::table('artlocation_projects_filters', function($table)
        {
            $table->dropColumn('project_id');
        });
    }
}
