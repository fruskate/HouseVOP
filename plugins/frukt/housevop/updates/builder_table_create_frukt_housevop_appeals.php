<?php namespace Frukt\Housevop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFruktHousevopAppeals extends Migration
{
    public function up()
    {
        Schema::create('frukt_housevop_appeals', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('frukt_housevop_appeals');
    }
}