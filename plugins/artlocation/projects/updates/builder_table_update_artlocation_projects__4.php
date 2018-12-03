<?php namespace Artlocation\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArtlocationProjects4 extends Migration
{
    public function up()
    {
        Schema::table('artlocation_projects_', function($table)
        {
            $table->dropColumn('page');
        });
    }
    
    public function down()
    {
        Schema::table('artlocation_projects_', function($table)
        {
            $table->text('page')->nullable();
        });
    }
}
