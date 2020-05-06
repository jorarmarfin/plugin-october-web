<?php namespace LuisMayta\Web\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaWebBanners2 extends Migration
{
    public function up()
    {
        Schema::table('luismayta_web_banners', function($table)
        {
            $table->string('subtitulo');
            $table->string('enlace');
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_web_banners', function($table)
        {
            $table->dropColumn('subtitulo');
            $table->dropColumn('enlace');
        });
    }
}
