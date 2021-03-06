<?php namespace Artlocation\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArtlocationProjects9 extends Migration
{
    public function up()
    {
        Schema::table('artlocation_projects_', function($table)
        {
            $table->dropColumn('work_type_desc');
        });
    }
    
    public function down()
    {
        Schema::table('artlocation_projects_', function($table)
        {
            $table->string('work_type_desc', 191);
        });
    }
}
