<?php namespace LuisMayta\Web\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaWebConfig extends Migration
{
    public function up()
    {
        Schema::create('luismayta_web_config', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('logo');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_web_config');
    }
}
