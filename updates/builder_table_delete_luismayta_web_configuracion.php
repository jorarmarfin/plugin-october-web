<?php namespace LuisMayta\Web\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteLuismaytaWebConfiguracion extends Migration
{
    public function up()
    {
        Schema::dropIfExists('luismayta_web_configuracion');
    }
    
    public function down()
    {
        Schema::create('luismayta_web_configuracion', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titulo', 191);
        });
    }
}
