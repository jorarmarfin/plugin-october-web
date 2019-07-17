<?php namespace LuisMayta\Web\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaWebConfiguracion extends Migration
{
    public function up()
    {
        Schema::create('luismayta_web_configuracion', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('titulo');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_web_configuracion');
    }
}
