<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresaliceWineliveryProducts extends Migration
{
    public function up()
    {
        Schema::create('andresalice_winelivery_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
            $table->double('price', 10, 0);
            $table->text('description');
            $table->integer('category_id');
            $table->integer('region_id');
            $table->integer('uva_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andresalice_winelivery_products');
    }
}
