<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceWineliveryCarts extends Migration
{
    public function up()
    {
        Schema::table('andresalice_winelivery_carts', function($table)
        {
            $table->integer('quantity');
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_winelivery_carts', function($table)
        {
            $table->dropColumn('quantity');
        });
    }
}
