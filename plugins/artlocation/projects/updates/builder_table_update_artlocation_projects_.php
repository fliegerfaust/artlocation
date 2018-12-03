<?php namespace Artlocation\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArtlocationProjects extends Migration
{
    public function up()
    {
        Schema::table('artlocation_projects_', function($table)
        {
            $table->text('full_desc');
            $table->text('preview_pic');
            $table->text('project_pic');
            $table->increments('id')->unsigned(false)->change();
            $table->string('name')->change();
            $table->string('type')->change();
            $table->renameColumn('description', 'short_desc');
        });
    }
    
    public function down()
    {
        Schema::table('artlocation_projects_', function($table)
        {
            $table->dropColumn('full_desc');
            $table->dropColumn('preview_pic');
            $table->dropColumn('project_pic');
            $table->increments('id')->unsigned()->change();
            $table->string('name', 191)->change();
            $table->string('type', 191)->change();
            $table->renameColumn('short_desc', 'description');
        });
    }
}
