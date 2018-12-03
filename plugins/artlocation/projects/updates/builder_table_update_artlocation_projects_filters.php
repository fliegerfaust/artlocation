<?php namespace Artlocation\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArtlocationProjectsFilters extends Migration
{
    public function up()
    {
        Schema::table('artlocation_projects_filters', function($table)
        {
            $table->string('code');
        });
    }
    
    public function down()
    {
        Schema::table('artlocation_projects_filters', function($table)
        {
            $table->dropColumn('code');
        });
    }
}
