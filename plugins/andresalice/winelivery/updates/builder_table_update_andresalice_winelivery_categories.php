<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceWineliveryCategories extends Migration
{
    public function up()
    {
        Schema::table('andresalice_winelivery_categories', function($table)
        {
            $table->integer('regions');
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_winelivery_categories', function($table)
        {
            $table->dropColumn('regions');
        });
    }
}
