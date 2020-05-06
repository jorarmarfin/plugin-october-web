<?php namespace LuisMayta\Web\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaWebSitio extends Migration
{
    public function up()
    {
        Schema::create('luismayta_web_sitio', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_web_sitio');
    }
}
