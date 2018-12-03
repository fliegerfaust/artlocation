<?php namespace Artlocation\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArtlocationProjectsFilters3 extends Migration
{
    public function up()
    {
        Schema::table('artlocation_projects_filters', function($table)
        {
            $table->integer('project_id')->nullable()->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('artlocation_projects_filters', function($table)
        {
            $table->integer('project_id')->nullable(false)->unsigned(false)->change();
        });
    }
}
