<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceWineliveryWishlists extends Migration
{
    public function up()
    {
        Schema::table('andresalice_winelivery_wishlists', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_winelivery_wishlists', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
}
