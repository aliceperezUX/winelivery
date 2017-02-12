<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceWineliveryRegions extends Migration
{
    public function up()
    {
        Schema::table('andresalice_winelivery_regions', function($table)
        {
            $table->integer('country_id');
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_winelivery_regions', function($table)
        {
            $table->dropColumn('country_id');
        });
    }
}
