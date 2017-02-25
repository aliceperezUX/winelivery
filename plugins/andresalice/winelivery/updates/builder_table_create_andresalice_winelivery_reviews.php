<?php namespace Andresalice\Winelivery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresaliceWineliveryReviews extends Migration
{
    public function up()
    {
        Schema::create('andresalice_winelivery_reviews', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('taste_id');
            $table->integer('product_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andresalice_winelivery_reviews');
    }
}
