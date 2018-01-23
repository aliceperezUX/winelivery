<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceWineliveryProducts12 extends Migration
{
    public function up()
    {
        Schema::table('andresalice_winelivery_products', function($table)
        {
            $table->integer('stock');
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_winelivery_products', function($table)
        {
            $table->dropColumn('stock');
        });
    }
}
