<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceWineliveryProducts9 extends Migration
{
    public function up()
    {
        Schema::table('andresalice_winelivery_products', function($table)
        {
            $table->integer('month');
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_winelivery_products', function($table)
        {
            $table->dropColumn('month');
        });
    }
}
