<?php namespace Artlocation\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArtlocationProjects11 extends Migration
{
    public function up()
    {
        Schema::table('artlocation_projects_', function($table)
        {
            $table->dropColumn('type');
        });
    }
    
    public function down()
    {
        Schema::table('artlocation_projects_', function($table)
        {
            $table->string('type', 191);
        });
    }
}
