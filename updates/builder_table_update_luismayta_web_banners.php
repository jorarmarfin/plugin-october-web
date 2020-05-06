<?php namespace LuisMayta\Web\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLuismaytaWebBanners extends Migration
{
    public function up()
    {
        Schema::table('luismayta_web_banners', function($table)
        {
            $table->integer('orden');
        });
    }
    
    public function down()
    {
        Schema::table('luismayta_web_banners', function($table)
        {
            $table->dropColumn('orden');
        });
    }
}
