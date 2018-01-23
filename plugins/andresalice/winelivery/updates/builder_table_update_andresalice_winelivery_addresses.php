<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceWineliveryAddresses extends Migration
{
    public function up()
    {
        Schema::table('andresalice_winelivery_addresses', function($table)
        {
            $table->integer('user_id');
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_winelivery_addresses', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
