<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceWineliveryCarts2 extends Migration
{
    public function up()
    {
        Schema::table('andresalice_winelivery_carts', function($table)
        {
            $table->integer('status')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_winelivery_carts', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
