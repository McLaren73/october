<?php

namespace Renatio\FormBuilder\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateFormsTable extends Migration
{

    public function up()
    {
        Schema::create('renatio_formbuilder_forms', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('template_id')->unsigned()->index()->nullable();
            $table->string('name');
            $table->string('code', 100)->unique();
            $table->text('description')->nullable();
            $table->string('from_email', 100)->nullable();
            $table->string('from_name')->nullable();
            $table->string('to_email', 100);
            $table->string('to_name')->nullable();
            $table->string('bcc_email', 100)->nullable();
            $table->string('bcc_name')->nullable();
            $table->text('success_message')->nullable();
            $table->text('error_message')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('renatio_formbuilder_forms');
    }

}