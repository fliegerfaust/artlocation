<?php namespace Artlocation\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArtlocationProjects6 extends Migration
{
    public function up()
    {
        Schema::table('artlocation_projects_', function($table)
        {
            $table->text('preview_img')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('artlocation_projects_', function($table)
        {
            $table->dropColumn('preview_img');
        });
    }
}
