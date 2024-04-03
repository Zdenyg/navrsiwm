<?php namespace Zed\Galleries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZedGalleries2 extends Migration
{
    public function up()
    {
        Schema::create('zed_galleries_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zed_galleries_');
    }
}
