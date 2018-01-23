<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceWineliveryProducts13 extends Migration
{
    public function up()
    {
        Schema::table('andresalice_winelivery_products', function($table)
        {
            $table->smallInteger('notification')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_winelivery_products', function($table)
        {
            $table->dropColumn('notification');
        });
    }
}
