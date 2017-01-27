<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceWineliveryCategories2 extends Migration
{
    public function up()
    {
        Schema::table('andresalice_winelivery_categories', function($table)
        {
            $table->text('regions')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_winelivery_categories', function($table)
        {
            $table->integer('regions')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
