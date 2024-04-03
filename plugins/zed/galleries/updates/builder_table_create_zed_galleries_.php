<?php namespace Zed\Galleries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZedGalleries extends Migration
{
    public function up()
    {
        Schema::create('zed_galleries_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zed_galleries_');
    }
}
