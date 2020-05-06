<?php namespace LuisMayta\Web\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLuismaytaWebBanners extends Migration
{
    public function up()
    {
        Schema::create('luismayta_web_banners', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('luismayta_web_banners');
    }
}
