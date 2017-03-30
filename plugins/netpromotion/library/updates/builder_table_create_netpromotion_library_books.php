<?php namespace Netpromotion\Library\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNetpromotionLibraryBooks extends Migration
{
    public function up()
    {
        Schema::create('netpromotion_library_books', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('author')->nullable();
            $table->string('year')->nullable();
            $table->text('short_description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('netpromotion_library_books');
    }
}
