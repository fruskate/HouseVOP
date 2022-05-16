<?php namespace Frukt\Housevop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFruktHousevopFlats extends Migration
{
    public function up()
    {
        Schema::create('frukt_housevop_flats', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->text('desc')->nullable();
            $table->boolean('is_active')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('frukt_housevop_flats');
    }
}
