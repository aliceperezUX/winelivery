<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresaliceWineliveryCategoryRegion extends Migration
{
    public function up()
    {
        Schema::create('andresalice_winelivery_category_region', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('category_id');
            $table->integer('region_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andresalice_winelivery_category_region');
    }
}
