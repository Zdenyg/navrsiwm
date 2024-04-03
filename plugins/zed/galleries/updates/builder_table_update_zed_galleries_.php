<?php namespace Zed\Galleries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZedGalleries extends Migration
{
    public function up()
    {
        Schema::table('zed_galleries_', function($table)
        {
            $table->string('slug', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('zed_galleries_', function($table)
        {
            $table->string('slug', 191)->nullable(false)->change();
        });
    }
}
